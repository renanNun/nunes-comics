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
    $products = App::get('database')->selectAll('produtos');
    return view('site/items', compact('products'));
  }

  public function about() {
    return view('site/about');
  }

  public function login() {
    return view('site/login');
  }

  public function admProducts() {
    return view('admin/admin-list-products');
  }
}