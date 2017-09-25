<?php

class Router
{
	private $routes;

	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

	/**
	 * Returns request string
	 **/

	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI']))
		{
			return  trim($_SERVER['REQUEST_URI'], '/'); // обрізаємо початковий слеш;
		}

	}

	public function run()
	{
		//отримати рядок запиту;

		$uri = $this->getURI();


		//пербираємо масив роутів у циклі

		foreach ($this->routes as $uriPattern=>$path)
		{

			// порівнюємо рядок запиту($uri) і дані, що є у роутах($uriPattern);

			if (preg_match("~$uriPattern~", $uri)) // за патерн беремо ключ з масиву роутів і порівнюємо з отриманим запитом
			{

				/*два останні значення з рядку запиту копіюємо до роута. Потім їх передамо як параметри
				до action. Так отримуємо внутрішнє посилання*/
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				// Визначаємо контролер, action, параметри

				$segments = explode('/', $internalRoute); // слова розділені / стають елементами масиву

				$controllerName = array_shift($segments).'Controller'; // перший елемент - контролер
				$controllerName = ucfirst($controllerName); // перша літера - велика

				$actionName = 'action'. ucfirst(array_shift($segments));

				$parameters = $segments; // після двох застосувань array_shift у мвсиві залиш. тільки два параметри;

				// Підключити файл класу-контролера
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';


				if (file_exists($controllerFile))
				{
					include_once $controllerFile;
				}

				// Створити об'єкт, викликати action
				$controllerObject = new $controllerName;

				//$result = $controllerObject->$actionName($parameters);

				/* Передаємо у ф-цію all_user_func_array  масивом назву об'єкту і методу, що треба викликати, у наступному масиві
				передаємо параметри для методу. У методі параметри приймаються у вигляді змінних*/
				$result = call_user_func_array([$controllerObject, $actionName], $parameters);

				if ($result != null)
				{
					break;
				}

			}

		}






	}
}
