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

$router->post('items', 'PagesController@products');
$router->post('item', 'PagesController@product');

  // public routes
  $router->get('', 'PagesController@home');
  $router->get('about', 'PagesController@about');
  $router->get('contact', 'PagesController@contact');
  $router->get('login', 'PagesController@login');
  $router->get('items', 'PagesController@products');

  // routes adm user
  $router->get('admin/home', 'PagesController@homeAdm');
  $router->get('admin/users/list', 'UsersController@index');
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

$router->post('contact/send', 'ContactController@sendEmail');



// Routes login
$router->post('login', 'LoginController@makeLogin');
$router->post('logout', 'LoginController@logout');

?>
