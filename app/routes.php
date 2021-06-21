<?php
  $router->get('index', 'PagesController@home');
  $router->get('about', 'PagesController@about');
  $router->get('contact', 'PagesController@contact');
  $router->get('login', 'PagesController@login');
  $router->get('items', 'PagesController@products');

  // routes adm user
  $router->get('admin/home', 'PagesController@homeAdm');
  $router->get('admin/users/list', 'UsersController@admUser');
  $router->post('users', 'UsersController@store');

  //routes adm category
  $router->get('categories/list', 'PagesController@admCategory');
?>