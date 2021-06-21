<?php
  $router->get('index', 'pagesController@home');
  $router->get('about', 'pagesController@about');
  $router->get('contact', 'pagesController@contact');
  $router->get('login', 'pagesController@login');
  $router->get('items', 'pagesController@products');

  // routes adm user
  $router->get('admin/home', 'pagesController@homeAdm');
  $router->get('admin/users/list', 'UsersController@admUser');
  $router->post('users', 'UsersController@store');

  //routes adm category
  $router->get('categories/list', 'PagesController@admCategory');
?>