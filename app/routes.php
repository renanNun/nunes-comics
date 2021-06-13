<?php
$router->get('index', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('login', 'PagesController@login');
$router->get('items', 'PagesController@products');

//routes adm user
$router->get('admin/home', 'PagesController@homeAdm');
$router->get('admin/users/list', 'UsersController@admUser');
$router->post('users', 'UsersController@store');



//routes adm category
$router->get('admin/categories/list', 'CategoriesController@index');
$router->get('admin/categories/add', 'CategoriesController@addCategory');
$router->get('admin/categories/edit', 'CategoriesController@editCategory');
$router->get('admin/categories/view', 'CategoriesController@viewCategory');

$router->post('admin/categories/create', 'CategoriesController@create');
$router->post('admin/categories/update', 'CategoriesController@edit');
$router->post('admin/categories/delete', 'CategoriesController@delete');

?>