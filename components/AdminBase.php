<?php


abstract class AdminBase
{
	/**
	 * Метод перевіряє, чи є користувач адміністратором;
	 * @return bool
	 */
	public static function checkAdmin()
	{
		// перевірка, чи авторизований користувач
		$userId = User::checkLogged();
		// отримання даних авторизованого користувача за його id;
		$user = User::getUserById($userId);
		// якщо роль користувача 'admin', пропускає його в адмінпанель
		if($user['role'] == 'admin')
		{
			return true;
		}
		// інакше закінчується робота повідомленням про відсутність доступу;
		//die('Access denied');

		return true;
	}
}