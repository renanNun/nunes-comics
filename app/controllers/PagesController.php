<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController {
  public function home() {
    $products = App::get('database')->selectAll('produtos');
    $view_page = $_SERVER['REQUEST_URI'];

    return view('site/index', compact('products', 'view_page'));
  }
  
  public function contact() {
    $view_page = $_SERVER['REQUEST_URI'];

    return view('site/contact', compact('view_page'));
  }
  
  public function products() {
    $page = 1;

    if (isset($_GET['pagina']) && !empty($_GET['pagina']))
    {
        $page = intval($_GET['pagina']);

        if ($page <= 0)
        {
            redirect('items');
        }
    }

    $items_per_page = 10;
    $start_limit = $items_per_page * $page - $items_per_page;

    $categories = App::get('database')->selectAll('categorias');
    $active = null;
    $view_page = $_SERVER['REQUEST_URI'];
    
    if(isset($_POST['category'])) {
      $products = App::get('database')->selectColumn('produtos', 'fk_category', $_POST['category'], $start_limit, $items_per_page);

      $rows_count = count($products);

      $categories = App::get('database')->selectAll('categorias');
      $active = $_POST['category'];

    } else if(isset($_POST['search'])) {
      $products = App::get('database')->selectColumn('produtos', 'name', $_POST['search'], $start_limit, $items_per_page);
      
      $rows_count = count($products);

    } else {
      $products = App::get('database')->selectAll('produtos', $start_limit, $items_per_page);

      $rows_count = App::get('database')->countAll('produtos');
    }

    $total_pages = ceil($rows_count / $items_per_page);

    return view('site/items', compact('products','categories', 'active', 'view_page', 'page', 'total_pages'));
  }

  public function product() {
    $product = App::get('database')->select('produtos', $_POST['id']);
    $category = App::get('database')->select('categorias', $product->fk_category);
    $view_page = $_SERVER['REQUEST_URI'];

    return view('site/item', compact('product', 'category', 'view_page'));
  }

  public function about() {
    $view_page = $_SERVER['REQUEST_URI'];

    return view('site/about', compact('view_page'));
  }

  public function login() {
    return view('site/login');
  }

  public function admProducts() {
    return view('admin/admin-list-products');
  }

  // talvez não precise
  public function homeAdm(){
    return view('admin/home-adm');
  }

  public function formUsers(){
    return view('users/add-user');
  }
}