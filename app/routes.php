<?php
$router->get('/', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('login', 'PagesController@login');
$router->get('items', 'PagesController@products');

//routes adm
$router->get('admin/home', 'PagesController@homeAdm');

//routes adm users
$router->get('admin/users/list', 'UsersController@index');

//chama form add
$router->get('admin/users/create', 'UsersController@createUser');
$router->get('admin/users/details', 'UsersController@listUser');

$router->post('admin/users/details', 'UsersController@show');
//adiciona no banco
$router->post('admin/users/list', 'UsersController@store');
//deleta usuario
$router->post('admin/users/delete', "UsersController@delete");







//routes adm category
$router->get('categories/list', 'PagesController@admCategory');

