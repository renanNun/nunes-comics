<?php
## Inicio rotas das views publicas
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('login', 'PagesController@login');
$router->get('items', 'PagesController@products');

## Fim rotas das views publicas

//route form Edit
$router->post('admin/users/formEdit', 'UsersController@showEdit');

$router->post('admin/users/edit', 'UsersController@edit');

//routes adm
$router->get('admin/home', 'PagesController@homeAdm');

//routes adm users
$router->get('admin/users/list', 'UsersController@index');

//chama form add
$router->get('admin/users/create', 'UsersController@createUser');

//adiciona no banco
$router->post('admin/users/list', 'UsersController@store');

//Mostra detalhes de usuario selecionado
$router->post('admin/users/details', 'UsersController@show');

//deleta usuario
$router->post('admin/users/delete', "UsersController@delete");







//routes adm category
$router->get('categories/list', 'PagesController@admCategory');

