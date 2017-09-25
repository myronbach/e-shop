<?php

class Cart
{
	public static function addProduct($id)
	{
		$id = intval($id);

		$productsInCart = [];

		if (isset($_SESSION['products']))
		{
			$productsInCart = $_SESSION['products'];
		}
		/*Якщо товар з даним ід вже існує у кошику, то знаходимо його і доплюсовуємо ще один до к-сті*/
		if (array_key_exists($id, $productsInCart))
		{
			$productsInCart[$id]++;
		}
		else
		{
			$productsInCart[$id] = 1;
		}

		$_SESSION['products'] = $productsInCart;

		return self::countItems();

	}


	/**
	 * Обчислює загальну к-сть товарів у кошику
	 * @return int, якщо кошик порожній - повертає 0;
	 */
	public static function countItems()
	{
		if(isset($_SESSION['products']))
		{
			$count = 0;
			foreach ($_SESSION['products'] as $id => $quantity)
			{
				$count += $quantity;
			}
			return $count;
		}
		else
		{
			return 0;
		}

	}


	/**
	 * Перевіряє, чи є товари у кошику? Якщо нема -
	 * @return bool , якщо є - повертає масив з 'id'=>'кількість одиниць товару'
	 */
	public static function getProducts()
	{
		if (isset($_SESSION['products']))
			return $_SESSION['products'];
		return false;
	}


	/**
	 * Обчислює вартість товарів у кошику
	 * Як параметр приймає масив з даними про товари,
	 * а за допомогою методу getProducts() - id і к-сть кожного з товарів у кошику
	 * @param $products
	 * @return bool|int повертає вартість товарів у кошику
	 */
	public static function getTotalPrice($products)
	{
		$productsInCart = self::getProducts();

		$total = 0;

		if ($productsInCart)
		{
			foreach ($products as $item)
			{
				$total += $item['price'] * $productsInCart[$item['id']];
			}
			return $total;
		}
		return false;
	}

	/**
	 * Видаляє товар з кошика за його id$
	 * @param $id
	 */
	public static function deleteProduct($id)
	{
		$id = intval($id);
		// Отримуємо масив товарів у кошику
		$productInCart = self::getProducts();

		// Видаляємо елемент масиву з вказаним id
		unset($productInCart[$id]);

		// Перезаписуємо масив товарів без видаленого елементу
		$_SESSION['products'] = $productInCart;
	}

	/**
	 * Видаляє всі товари з кошика
	 */
	public static function clear()
	{
		if (isset($_SESSION['products']))
		{
			unset($_SESSION['products']);
		}
	}
}