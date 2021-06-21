<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProductsController {
    public function addProduct() {
        $action = 'create';
        $title = 'Crie um novo produto';
        $editable = true;
        $product = null;

        return view('admin/admin-add-product', compact('action', 'title', 'editable', 'product'));
    }

    public function viewProduct() {
        $action = '';
        $title = 'Visualização do produto';
        $editable = false;
        $products = App::get('database')->select('produtos', $_POST['id']);

        return view('admin/admin-view-product', compact('action', 'title', 'editable', 'products'));
    }

    public function editProduct() {
        $action = 'update';
        $title = 'Edite o produto';
        $editable = true;
        $product = App::get('database')->select('produtos', $_POST['id']);

        return view('admin/admin-add-product', compact('action', 'title', 'editable', 'product'));
    }

    public function index() {
        $products = App::get('database')->selectAll('produtos');

        return view('admin/admin-list-products', compact('products'));
    }

    public function create() {
        $name = $_POST['name'];

        if ($name) {
            App::get('database')->insert('produtos', compact('name'));
        }

        redirect('admin/categories/list');
    }

    public function edit() {
        $name = $_POST['name'];
        $id = $_POST['id'];

        if ($id && $name) {
            App::get('database')->edit('produtos', compact('name'), $id);
        }

        redirect('admin/categories/list');
    }

    public function delete() {
        $id = $_POST['id'];

        if ($id) {
            App::get('database')->delete('produtos', $id);
        }

        redirect('admin/categories/list');
    }
}