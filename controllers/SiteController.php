<?php


 # всі підключення файлів класів вимкнено, бо реалізовано ф-цію autoload
//include_once ROOT.'/models/Category.php';
//include_once ROOT.'/models/Product.php';


class SiteController
{
	public function actionIndex()
	{
		$categories = [];
		$categories = Category::getCategoryList();

		$latestProducts = [];
		$latestProducts = Product::getLatestProducts(6);

		$sliderProducts = Product::getRecommendedProducts();

        //$_SESSION['test'] = 'Session Ok';
		require_once (ROOT. '/views/site/index.php');
		return true;
	}

	public function actionContact()
	{
		//unset($_SESSION['test']);
        //TODO: send email
		require_once (ROOT.'/views/site/contacts.php');
		return true;
	}

	public function actionAbout()
	{


		require_once (ROOT.'/views/site/about.php');
		return true;
	}


}
