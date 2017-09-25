<?php


class User
{
	public static function  register($name, $email, $password)
	{
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
	    $db = Db::getConnection();

		$sql = 'INSERT INTO user (name, email, password) VALUES
								(:name, :email, :password)';
		$result = $db->prepare($sql);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':password',$password_hash , PDO::PARAM_STR);

		return $result->execute();
	}

	public static function checkName($name)
	{
		if (strlen($name) >= 2)
		{
			return true;
		}
		return false;
	}

	public static function checkPassword($password)
	{
		if (strlen($password) >= 4)
		{
			return true;
		}
		return false;
	}

	public static function checkEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return true;
		}
		return false;
	}

	public static function checkPhone($phone)
	{
		if (strlen($phone) >= 5)
			return true;
		return false;
	}

	public static function checkEmailExists($email)
	{
		$db = Db::getConnection();
		$sql = "SELECT count(*) FROM user WHERE email = :email";
		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->execute();

		if ($result->fetchColumn())
			return true;
		return false;
	}
	public static function getByEmail($email)
    {
        $db = Db::getConnection();
        $sql = "SELECT * FROM user WHERE email = :email";
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch();
    }


	public static  function checkUserData($email, $password)
	{
		$db = Db::getConnection();

		$sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
		$result = $db->prepare($sql);
		$result->bindParam(':email', $email,PDO::PARAM_STR);
		$result->bindParam(':password', $password,PDO::PARAM_STR);
		$result->execute();

		$user = $result->fetch();
		if ($user)
		{
			return $user['id'];
		}

		return false;
	}

	public static function auth($userId)
	{
		//session_start();
		$_SESSION['user'] = $userId;
	}

	/**
	 * Перевіряє , чи авторизований користувач. Якщо так, то повертає id користувача,
	 * якщо ні, то перенаправляє на сторінку авторизації
	 * @return mixed
	 */
	public static function checkLogged()
	{
		//session_start();

		if (isset($_SESSION['user']))
		{
			return $_SESSION['user'];
		}
		header("Location: /user/login");
		exit;
	}

	/**
	 * Перевіряє, чи авторизований користувач
	 * @return bool
	 */
	public static function isGuest()
	{
		//session_start();

		if (isset($_SESSION['user']))
		{
			return false;
		}
		return true;
	}

	/**
	 * Добуває всю інформацію про користувача за його id;
	 * @param $id
	 * @return mixed
	 */
	public static function getUserById($id)
	{
		$db = Db::getConnection();
		$query = "SELECT * FROM user WHERE id = :id";

		$result = $db->prepare($query);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->execute();

		return $result->fetch();

	}

	public static function edit($id, $name, $password)
	{
		$db = Db::getConnection();

		$sql = "UPDATE user
				SET name = :name, password = :password
				WHERE id = :id";
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':password', $password, PDO::PARAM_STR);
		return $result->execute();
	}

}