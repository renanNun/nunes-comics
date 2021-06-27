<?php
$router->get('index', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('login', 'PagesController@login');
$router->get('items', 'PagesController@products');
$router->post('items', 'PagesController@productsFilter');
$router->post('item', 'PagesController@product');

  // public routes
  $router->get('', 'PagesController@home');
  $router->get('about', 'PagesController@about');
  $router->get('contact', 'PagesController@contact');
  $router->get('login', 'PagesController@login');
  $router->get('items', 'PagesController@products');

  // routes adm user
  $router->get('admin/home', 'PagesController@homeAdm');
  $router->get('admin/users/list', 'UsersController@admUser');
  $router->post('users', 'UsersController@store');



  

  //routes adm products
  $router->get('admin/products/list', 'ProductsController@index');
  $router->get('admin/products/add', 'ProductsController@addProduct');


  // Routes adm products -> Render view
  $router->post('admin/products/view', 'ProductsController@viewProduct');
  $router->post('admin/products/edit', 'ProductsController@editProduct');

  
  // Routes adm category -> Database
  $router->post('admin/products/create', 'ProductsController@create');
  $router->post('admin/products/update', 'ProductsController@edit');
  $router->post('admin/products/delete', 'ProductsController@delete');

//routes adm user
$router->get('admin/home', 'PagesController@homeAdm');
$router->get('admin/users/list', 'UsersController@admUser');
$router->post('users', 'UsersController@store');



//routes adm category
$router->get('admin/categories/list', 'CategoriesController@index');
$router->get('admin/categories/add', 'CategoriesController@addCategory');

// Routes adm category -> Render view
$router->post('admin/categories/view', 'CategoriesController@viewCategory');
$router->post('admin/categories/edit', 'CategoriesController@editCategory');

// Routes adm category -> Database
$router->post('admin/categories/create', 'CategoriesController@create');
$router->post('admin/categories/update', 'CategoriesController@edit');
$router->post('admin/categories/delete', 'CategoriesController@delete');

$router->get('contact', 'PagesController@contact');
$router->post('contact/send', 'ContactController@sendEmail');
?>