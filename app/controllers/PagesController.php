<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController {
  public function home() {
    $products = App::get('database')->selectAll('produtos');
    return view('site/index', compact('products'));
  }
  
  public function contact() {
    return view('site/contact');
  }
  
  public function products() {

    $categories = App::get('database')->selectAll('categorias');
    $active = null;

    if(isset($_POST['category'])) {
      $products = App::get('database')->selectColumn('produtos', 'fk_category', $_POST['category']);
      
      $categories = App::get('database')->selectAll('categorias');
      $active = $_POST['category'];
  
      return view('site/items', compact('products','categories', 'active'));
    } else if(isset($_POST['search'])) {
      $products = App::get('database')->selectColumn('produtos', 'name', $_POST['search']);

      return view('site/items', compact('products','categories', 'active'));
    } else {
      $products = App::get('database')->selectAll('produtos');
  
      return view('site/items', compact('products','categories', 'active'));
    }


  }

  public function product() {
    $product = App::get('database')->select('produtos', $_POST['id']);
    $category = App::get('database')->select('categorias', $product->fk_category);


    return view('site/item', compact('product', 'category'));
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

  // talvez não precise
  public function homeAdm(){
    return view('home-adm');
  }

  public function formUsers(){
    return view('users/add-user');
  }
}