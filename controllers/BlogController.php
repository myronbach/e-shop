<?php


class BlogController
{
	public function actionIndex()
	{

		$categories = [];
		$categories = Category::getCategoryList();


		$blogList = [];
		$blogList = Blog::getBlogList();


		require_once (ROOT. '/views/blog/index.php');
		return true;
	}

	public function actionView($id)
	{
		$categories = [];
		$categories = Category::getCategoryList();

		if ($id)
		{
			$blogItem = Blog::getBlogItemById($id);

			require_once(ROOT . '/views/blog/view.php');
			return true;
		}
	}
}