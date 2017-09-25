<?php

return [

	// Товар
	'product/([0-9]+)' => 'product/view/$1',
	// Каталог
	'catalog' => 'catalog/index',
	// Категорія товарів
	'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
	'category/([0-9]+)' => 'catalog/category/$1',
	// Блог
	'blog/([0-9]+)' => 'blog/view/$1',
	'blog' => 'blog/index',
	// Кошик:
	'cart/delete/([0-9]+)' => 'cart/delete/$1',
	'cart/checkout' => 'cart/checkout',
	'cart/add/([0-9]+)' => 'cart/add/$1',
	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
	'cart' => 'cart/index',

	// Користувач
	'user/register' => 'user/register',
	'user/login' => 'user/login',
	'user/logout' => 'user/logout',
	'cabinet/edit' => 'cabinet/edit',
	'cabinet' => 'cabinet/index',
	// Керування товарами:
	'admin/product/create' => 'adminProduct/create',
	'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
	'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
	'admin/product' => 'adminProduct/index',

    // Керування категоріями:
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',

    // Керування замовленнями:
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',


	// Адмінпанель
	'admin' => 'admin/index',

	// Про магазин:
	'contacts' => 'site/contact',
	'about' =>'site/about',

	// Головна сторінка
	'' => 'site/index',

];