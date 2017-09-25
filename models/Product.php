<?php


class Product
{
	const SHOW_BY_DEFAULT = 6;

	public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
	{
		$count = intval($count);

		$db = Db::getConnection();

		$productList = [];

		$result = $db->query('SELECT id, name, price, image, is_new FROM product
					WHERE status = "1"
					ORDER BY id DESC
					LIMIT ' .$count);

		$i = 0;
		while ($row = $result->fetch())
		{
			$productList[$i]['id'] = $row['id'];
			$productList[$i]['name'] = $row['name'];
			$productList[$i]['price'] = $row['price'];
			$productList[$i]['image'] = $row['image'];
			$productList[$i]['is_new'] = $row['is_new'];
			$i++;
		}
		return $productList;
	}

	public static function getProductListByCategory($categoryId = false, $page = 1)
	{
		if ($categoryId)
		{
			$page = intval($page);
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT;

			$db = Db::getConnection();
			$productList = [];
			$result = $db->query("SELECT id, name, price, image, is_new
									FROM product WHERE status = '1' AND category_id = '$categoryId'
						 			ORDER BY id DESC LIMIT ".self::SHOW_BY_DEFAULT ." OFFSET $offset");

			$i = 0;
			while ($row = $result->fetch())
			{
				$productList[$i]['id'] = $row['id'];
				$productList[$i]['name'] = $row['name'];
				$productList[$i]['price'] = $row['price'];
				$productList[$i]['image'] = $row['image'];
				$productList[$i]['is_new'] = $row['is_new'];
				$i++;
			}

			return $productList;
		}
	}

	public static function getProductById($id)
	{
		$id = intval($id);

		if ($id)
		{
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM product WHERE id= '.$id);
			$result ->setFetchMode(PDO::FETCH_ASSOC);

			return $result->fetch();
		}
	}

	public static function getTotalProductsInCategory($category)
	{
		$db = Db::getConnection();

		$result = $db->query("SELECT count(id) AS count FROM product WHERE status = '1' AND
  								category_id = $category");
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();

		return $row['count'];
	}

	/**
	 * Метод для отримання повної інформаціїї про товари за їх id
	 * @param array $idsArray Приймає id у вигляді масиву
	 * @return array з даними про товари
	 */
	public static function getProductsByIds(array $idsArray)
	{
		$products = [];

		$db = Db::getConnection();

		$idsString = implode(',', $idsArray);

		$sql = "SELECT * FROM product WHERE status = '1' AND id IN ($idsString)";

		$result = $db->query($sql);

		$i = 0;
		while ($row = $result->fetch(PDO::FETCH_ASSOC))
		{
			$products[$i]['id'] = $row['id'];
			$products[$i]['code'] = $row['code'];
			$products[$i]['name'] = $row['name'];
			$products[$i]['price'] = $row['price'];
			$i++;
		}
		return $products;
	}

	public static function getRecommendedProducts()
	{
		$products = [];

		$db = Db::getConnection();

		$sql = "SELECT id, name, price, is_new FROM product WHERE status = '1' AND is_recommended = '1' ORDER BY id DESC";

		$result = $db->query($sql);

		$i = 0;
		while ($row = $result->fetch(PDO::FETCH_ASSOC))
		{
			$products[$i]['id'] = $row['id'];
			$products[$i]['name'] = $row['name'];
			$products[$i]['price'] = $row['price'];
			$products[$i]['is_new'] = $row['is_new'];
			$i++;
		}
		return $products;
	}

	/**
	 *
	 * @return array масив товарів, що знаходяться у БД
	 */
	public static function getProductsList()
	{
		$db = Db::getConnection();

		$sql = "SELECT id, name, price, code FROM product ORDER BY id ASC ";
		$result = $db->query($sql);
		$productList = $result->fetchAll(PDO::FETCH_ASSOC);
		return $productList;
	}

	/**
	 * Видаляє товар з вказаним id;
	 * @param $id
	 * @return bool
	 */
	public static function deleteProductById($id)
	{
		$db = Db::getConnection();
		$sql = "DELETE FROM product WHERE id = :id";
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	public static function createProduct(array $options)
	{
		$db = Db::getConnection();

		$sql = "INSERT INTO product
							(name, code, price, category_id, brand, availability,
                			  description, is_new, is_recommended, status)
                			  VALUES (:name, :code, :price, :category_id, :brand, :availability,
                			  :description, :is_new, :is_recommended, :status)";
		$result = $db->prepare($sql);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':code', $options['code'], PDO::PARAM_STR);
		$result->bindParam(':price', $options['price'], PDO::PARAM_STR);
		$result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
		$result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
		$result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
		$result->bindParam(':description', $options['description'], PDO::PARAM_STR);
		$result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
		$result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
		$result->bindParam(':status', $options['status'], PDO::PARAM_INT);
		if ($result->execute())
		{
			return $db->lastInsertId();
		}
		return 0;
	}

	public static function updateProductById($id, $options)
	{
		$db = Db::getConnection();
		$sql = "UPDATE product
            SET
                name = :name,
                code = :code,
                price = :price,
                category_id = :category_id,
                brand = :brand,
                availability = :availability,
                description = :description,
                is_new = :is_new,
                is_recommended = :is_recommended,
                status = :status
            WHERE id = :id";
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':code', $options['code'], PDO::PARAM_STR);
		$result->bindParam(':price', $options['price'], PDO::PARAM_STR);
		$result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
		$result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
		$result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
		$result->bindParam(':description', $options['description'], PDO::PARAM_STR);
		$result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
		$result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
		$result->bindParam(':status', $options['status'], PDO::PARAM_INT);
		return $result->execute();
	}


	/**
	 * Повертає шлях до файлу зображення товару за його id
	 * @param $id
	 * @return string
	 */
	public static function getImage($id)
	{
		// Назва порожнього зображення
		$noImage = 'no-image.jpg';

		// Шлях до папки з зображеннями товарів
		$path = '/upload/images/products/';

		// Шлях та ім'я файлу зображення
		$pathToProductImage = $path. $id.'.jpg';

		if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage))
		{
			// Якщо є файл, то повертаємо шлях до нього
			return $pathToProductImage;
		}

		// Якщо нема файлу, повертаємо шлях до порожнього
		return $path .$noImage;
	}


}