<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CategoriesController extends LoginController
{
    public function addCategory()
    {
        session_start();
        $this->sessionVerify();
        
        $action = 'create';
        $title = 'Crie uma nova categoria';
        $editable = true;
        $category = null;

        return view('admin/categories/admin-add-category', compact('action', 'title', 'editable', 'category'));
    }

    public function viewCategory()
    {
        session_start();
        $this->sessionVerify();

        $action = '';
        $title = 'Visualização da categoria';
        $editable = false;
        $category = App::get('database')->select('categorias', $_POST['id']);

        return view('admin/categories/admin-add-category', compact('action', 'title', 'editable', 'category'));
    }

    public function editCategory()
    {
        session_start();
        $this->sessionVerify();

        $action = 'update';
        $title = 'Edite a categoria';
        $editable = true;
        $category = App::get('database')->select('categorias', $_POST['id']);

        return view('admin/categories/admin-add-category', compact('action', 'title', 'editable', 'category'));
    }

    public function index()
    {
        session_start();
        $this->sessionVerify();

        $page = 1;

        if (isset($_GET['pagina']) && !empty($_GET['pagina']))
        {
            $page = intval($_GET['pagina']);

            if ($page <= 0)
            {
                redirect('admin/categories/list');
            }
        }

        $items_per_page = 10;
        $start_limit = $items_per_page * $page - $items_per_page;

        $categories = App::get('database')->selectAll('categorias', $start_limit, $items_per_page);
        $rows_count = App::get('database')->countAll('categorias');

        $total_pages = ceil($rows_count / $items_per_page);

        return view('admin/categories/admin-list-categories', compact('categories', 'page', 'total_pages'));
    }

    public function create()
    {
        $nome = $_POST['name'];

        if ($nome) {
            App::get('database')->insert('categorias', compact('nome'));
        }

        redirect('admin/categories/list');
    }

    public function edit()
    {
        $nome = $_POST['name'];
        $id = $_POST['id'];

        if ($id && $nome) {
            App::get('database')->edit('categorias', compact('nome'), $id);
        }

        redirect('admin/categories/list');
    }

    public function delete()
    {
        $id = $_POST['id'];

        if ($id) {
            App::get('database')->delete('categorias', $id);
        }

        redirect('admin/categories/list');
    }
}
