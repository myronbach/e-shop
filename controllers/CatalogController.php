<?php

# всі підключення файлів класів вимкнено, бо реалізовано ф-цію autoload
//include_once ROOT. '/models/Category.php';
//include_once ROOT. '/models/Product.php';
//include_once ROOT. '/components/Pagination.php';


class CatalogController
{
	public function actionIndex()
	{
		$categories =[];
		$categories = Category::getCategoryList();

		$latestProducts = [];
		$latestProducts = Product::getLatestProducts(12);

		require_once (ROOT. '/views/catalog/index.php');
		return true;
	}

	public function actionCategory($categoryId,$page = 1)
	{

		$categories =[];
		$categories = Category::getCategoryList();

		$categoryProduct = [];
		$categoryProduct = Product::getProductListByCategory($categoryId, $page);

		$total = Product::getTotalProductsInCategory($categoryId);

		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

		require_once (ROOT.'/views/catalog/category.php');

		return true;
	}
}