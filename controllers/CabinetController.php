<?php


class CabinetController
{
	public function actionIndex()
	{
		$userId = User::checkLogged();

		$user = User::getUserById($userId);


		require_once (ROOT.'/views/cabinet/index.php');
		return true;
	}

	public function actionEdit()
	{
		// отримуємо id залогіненого користувача
		$userId = User::checkLogged();
		// отримуємо всі дані користувача  за id
		$user = User::getUserById($userId);

		$name = $user['name'];
		$password = $user['password'];

		$result = false;

		// якщо форму відправлено ...
		if (isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$password = $_POST['password'];

			$errors = false;

			if (!User::checkName($name))
			{
				$errors[] = 'Ім\'я має бути не менше 2-х символів';
			}

			if (!User::checkPassword($password))
			{
				$errors[] = 'Пароль має бути не менше 6 символів';
			}

			if ($errors == false)
			{
				$result = User::edit($userId, $name, $password);
			}
		}

		echo "<br>";
		var_dump($result);

		require_once (ROOT. '/views/cabinet/edit.php');
		return true;
	}
}