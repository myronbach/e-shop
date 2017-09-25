<?php


class CartController
{
	/**
	 * Action для долавання товару у кошик синхронним запитом
	 * (створений для прикладу, на сайті не використовується
	 * разом з Ajax не працює)
	 * @param integer $id товару
	 */
	public function actionAdd($id)
	{


		Cart::addProduct($id);

		$referrer = $_SERVER['HTTP_REFERER'];
		header("Location: $referrer");

	}

	/***
	 * Action для додавання товару у кошик асинхронним запитом(ajax)
	 * @param int $id
	 * @return bool
	 */
	public function actionAddAjax($id)
	{
		echo Cart::addProduct($id);
		return true;
	}

	public function actionIndex()
	{
		// Дані для фомування бічного меню
		$categories = [];
		$categories = Category::getCategoryList();

		// Отримуємо дані з кошика
		$productsInCart = false;

		$productsInCart = Cart::getProducts();
		if ($productsInCart)
		{
			$productsIds = array_keys($productsInCart);
			$products = Product::getProductsByIds($productsIds);

		// Отримуємо загальну вартість товарів
		$totalPrice = Cart::getTotalPrice($products);
		}

		include_once (ROOT.'/views/cart/index.php');
		return true;
	}

	public function actionDelete($id)
	{
		Cart::deleteProduct($id);
		$referrer = $_SERVER['HTTP_REFERER'];
		header("Location: $referrer");
		return true;
	}

	public function actionCheckout()
	{
		// Список категорій для лівого меню
		$categories = [];
		$categories = Category::getCategoryList();


		// Отримуємо дані з кошика
		$productsInCart = Cart::getProducts();

		// В кошику є товари?
		if ($productsInCart == false)
		{
			// Товар відсутній
			// Відправляємо на головну сторінку
			header("Location: /");
		}

		// Добуваємо: загальну вартість, кількість товарів у кошику
		$productsId = array_keys($productsInCart); // Отримуємо ключі масиву, які є id товару
		$products = Product::getProductsByIds($productsId); // Отримуємо всі дані про товари у кошику
		$totalPrice = Cart::getTotalPrice($products); // Отримуємо загальну суму
		$totalQuantity = Cart::countItems(); // Отримуємо к-сть товарів у кошику

		// Поля для форми
		$userName = false;
		$userPhone = false;
		$userComment = false;

		// Статус успішного оформлення замовлення
		$result = false;

		// Перевіряємо, чи користувач гість
		if (!User::isGuest())
		{
			$userId = User::checkLogged(); // Отримуємо id користувача
			$user = User::getUserById($userId); // Отримуємо за id всю інформацію про користувача
			$userName = $user['name']; // Отримуємо ім'я
		}
		else
		{
			$userId = '';
		}

		// Обробка форми
		if (isset($_POST['submit']))
		{
			// Форму відправлено

			/*Отримуємо дані з полів*/
			$userName = $_POST['userName'];
			$userPhone = $_POST['userPhone'];
			$userComment = $_POST['userComment'];

			/*Перевіряємо дані*/
			$errors = false;
			if (!User::checkName($userName))
				$errors[] = 'Bad name!!!';
			if (!User::checkPhone($userPhone))
				$errors[] = 'Bad phone';


			if ($errors == false)
			{
				/*Дані правильні.
				Зберігаємо замовлення в БД*/
				// TODO: method save
				$result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

				if($result)
				{
					/*Дані збережено*/
					// TODO: має бути відправлення листа адміністраторові
					echo 'A massage was sent';
					Cart::clear(); // Очищуємо кошик
				}

			}
		}

		require_once (ROOT. '/views/cart/checkout.php');
		return true;
	}
}
