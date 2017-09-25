<?php


class UserController
{
	public function actionRegister()
	{

		$name ='';
		$email = '';
		$password = '';

		if (isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;

			/*Перевірка введених даних на правильність*/
			if (!User::checkName($name))
			{
				$errors[] = 'Ім\'я має бути не менше 2-х символів';
			}

			if (!User::checkEmail($email))
			{
				$errors[] = 'Неправильний емейл';
			}
			if (!User::checkPassword($password))
			{
				$errors[] = 'Пароль має бути не менше 6 символів';
			}

			/*Перевірка співпадіння email*/
			if (User::checkEmailExists($email))
			{
				$errors[] = 'Такий email вже існує';
			}

			/*Якщо всі дані введені правильно*/
			if ($errors == false)
			{
				$result = User::register($name, $email, $password);

				/*Добуваємо id користувача і автоматично логінимо його*/
				$userId = User::checkUserData($email, $password);
				User::auth($userId);

			}

		}


		require_once (ROOT.'/views/user/register.php');
		return true;
	}

	public function actionLogin()
	{
		$email = '';
		$password = '';

		if (isset($_POST['submit']))
		{
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;  // array

			// Валідація полів
			if (!User::checkEmail($email))
			{
				$errors[] = 'Bad email!!!';
			}

			// Перевірка існування користувача
            $user = User::getByEmail($email);

            if($user){
                if(password_verify($password, $user['password'])){
                    User::auth($user['id']);
                    header("Location: /cabinet/");
                    exit;
                }else{
                    $errors[] = 'Введіть вірний пароль';
                }
            } else {
                $errors[] = 'Користувача з таким email не знайдено';






			}

		}

		require_once (ROOT. '/views/user/login.php');
		return true;
	}

	public function actionLogout()
	{
		//session_start();
		unset($_SESSION['user']);
		header("Location: /");
		exit;
	}

}
