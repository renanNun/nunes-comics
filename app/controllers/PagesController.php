<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController {
  public function home() {
    return view('site/index');
  }
  
  public function contact() {
    return view('site/contact');
  }
  
  public function products() {
    // $tarefas = App::get('database')->selectAll('produtos');

    // return view('site/products', compact('produtos'));
    return view('site/items');
  }

  public function about() {
    return view('site/about');
  }

  public function login() {
    return view('site/login');
  }

  public function homeAdm() {
    return view('home-adm');
  }

  public function admCategory() {
    return view('categories/admin-list-categories');
  }

  public function formUsers() {
    return view('users/add-user');
  }
}