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
        $categories = App::get('database')->selectAll('categorias');

        return view('admin/admin-add-product', compact('action', 'title', 'editable', 'product', 'categories'));
    }

    public function viewProduct() {
        $action = '';
        $title = 'Visualização do produto';
        $editable = false;
        $product = App::get('database')->select('produtos', $_POST['id']);
        $category = App::get('database')->select('categorias', $product->fk_category);

        return view('admin/admin-view-product', compact('action', 'title', 'editable', 'product', 'category'));
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
        $fk_category = $_POST['category'];

        if (!isset($_FILES['image'])) {
            $extension = strtolower(substr($_FILES['image']['name'], -4));
            $new_name = md5(time()) . $extension;
            $file = "/public/img/products";

            move_uploaded_file($_FILES['image']['new_name'], $file . $new_name);
            $image = $file . $new_name;

            var_dump($image);
            die();

            if ($name) {
                App::get('database')->insert('produtos', compact('name', 'preco', 'description', 'estoque', 'fk_category', 'image'));
            }
        }




        redirect('admin/products/list');
    }

    public function edit() {

        $dados = ([
            'name' => $_POST['name'],
            'preco' => $_POST['preco'],
            'description' => $_POST['description'],
            'estoque' => $_POST['estoque'],
            'foto' => '../../../public/img/item4.jpg',
            'fk_category' => $_POST['category']
        ]);
        $id = $_POST['id'];
        
        App::get('database')->edit('produtos', $dados, $id);

        redirect('admin/products/list');
    }

    public function delete() {
        $id = $_POST['id'];

        if ($id) {
            App::get('database')->delete('produtos', $id);
        }

        redirect('admin/products/list');
    }
}