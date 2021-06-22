<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProductsController {
    public function addProduct() {
        $action = 'create';
        $title = 'Crie um novo produto';
        $editable = true;
        $products = null;

        return view('admin/admin-add-product', compact('action', 'title', 'editable', 'products'));
    }

    public function viewProduct() {
        $action = '';
        $title = 'Visualização do produto';
        $editable = false;
        $product = App::get('database')->select('produtos', $_POST['id']);

        return view('admin/admin-view-product', compact('action', 'title', 'editable', 'product'));
    }

    public function editProduct()
    {
        $action = 'update';
        $title = 'Edite um produto existente';
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
        $preco = $_POST['preco'];
        $description = $_POST['description'];
        $estoque = $_POST['estoque'];

        if ($name) {
            App::get('database')->insert('produtos', compact('name', 'preco', 'description', 'estoque'));
        }

        redirect('admin/products/list');
    }

    public function edit()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $preco = $_POST['preco'];

        if (!(isset($id) && isset($name) && isset($preco))) {
            App::get('database')->edit('produtos', compact('name', 'preco'), $id);
        }

        redirect('admin/products/list');
    }


    // public function store() {
    //     App::get('database')->insert('produtos', [
    //         'id' => $_POST['id'],
    //         'nome' => $_POST['nome'],
    //         'estoque' => $_POST['estoque'],
    //         'foto' => $_POST['foto'],
    //         'preco' => $_POST['preco']
    //     ]);

    //     return redirect('admin/products/list');
    // }

    public function delete() {
        $id = $_POST['id'];

        if ($id) {
            App::get('database')->delete('produtos', $id);
        }

        redirect('admin/products/list');
    }
}