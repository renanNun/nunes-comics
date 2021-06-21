<?php

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

?>