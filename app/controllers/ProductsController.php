<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProductsController extends LoginController {
    public function addProduct() {
        session_start();
        $this->sessionVerify();

        $action = 'create';
        $title = 'Crie um novo produto';
        $editable = true;
        $product = null;
        $categories = App::get('database')->selectAll('categorias');

        return view('admin/products/admin-add-product', compact('action', 'title', 'editable', 'product', 'categories'));
    }

    public function viewProduct() {
        session_start();
        $this->sessionVerify();

        $action = '';
        $title = 'Visualização do produto';
        $editable = false;
        $product = App::get('database')->select('produtos', $_POST['id']);
        $category = App::get('database')->select('categorias', $product->fk_category);

        return view('admin/products/admin-view-product', compact('action', 'title', 'editable', 'product', 'category'));
    }

    public function editProduct()
    {
        session_start();
        $this->sessionVerify();

        $action = 'update';
        $title = 'Edite um produto existente';
        $editable = true;
        $product = App::get('database')->select('produtos', $_POST['id']);
        $categories = App::get('database')->selectAll('categorias');

        return view('admin/products/admin-add-product', compact('action', 'title', 'editable', 'product', 'categories'));
    }

    public function index() {
        session_start();
        $this->sessionVerify();

        $page = 1;

        if (isset($_GET['pagina']) && !empty($_GET['pagina']))
        {
            $page = intval($_GET['pagina']);

            if ($page <= 0)
            {
                redirect('admin/products/list');
            }
        }

        $items_per_page = 10;
        $start_limit = $items_per_page * $page - $items_per_page;

        $products = App::get('database')->selectAll('produtos', $start_limit, $items_per_page);
        $rows_count = App::get('database')->countAll('produtos');

        $total_pages = ceil($rows_count / $items_per_page);

        return view('admin/products/admin-list-products', compact('products', 'page', 'total_pages'));
    }

    public function create() {
        $name = $_POST['name'];
        $preco = $_POST['preco'];
        $description = $_POST['description'];
        $estoque = $_POST['estoque'];
        $fk_category = $_POST['category'];

        $file = "../../../public/img/products/";
        $foto = $file . $_POST['image']; 

        
        if ($name) {
            App::get('database')->insert('produtos', compact('name', 'preco', 'description', 'estoque', 'fk_category', 'foto'));
        }


        redirect('admin/products/list');
    }

    public function edit() {

        $file = "../../../public/img/products/";
        $foto = $file . $_POST['image'];

        $dados = ([
            'name' => $_POST['name'],
            'preco' => $_POST['preco'],
            'description' => $_POST['description'],
            'estoque' => $_POST['estoque'],
            'foto' => $foto,
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