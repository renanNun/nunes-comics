<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CategoriesController
{
    public function addCategory()
    {
        $action = 'create';
        $title = 'Crie uma nova categoria';
        $editable = true;
        $category = null;

        return view('admin/admin-add-category', compact('action', 'title', 'editable', 'category'));
    }

    public function viewCategory()
    {
        $action = '';
        $title = 'Visualização da categoria';
        $editable = false;
        $category = App::get('database')->select('categories', $_POST['id']);

        return view('admin/admin-add-category', compact('action', 'title', 'editable', 'category'));
    }

    public function editCategory()
    {
        $action = 'update';
        $title = 'Edite a categoria';
        $editable = true;
        $category = App::get('database')->select('categories', $_POST['id']);

        return view('admin/admin-add-category', compact('action', 'title', 'editable', 'category'));
    }

    public function index()
    {
        $categories = App::get('database')->selectAll('categories');

        return view('admin/admin-list-categories', compact('categories'));
    }

    public function create()
    {
        $name = $_POST['name'];

        if ($name) {
            App::get('database')->insert('categories', compact('name'));
        }

        redirect('admin/categories/list');
    }

    public function edit()
    {
        $name = $_POST['name'];
        $id = $_POST['id'];

        if ($id && $name) {
            App::get('database')->edit('categories', compact('name'), $id);
        }

        redirect('admin/categories/list');
    }

    public function delete()
    {
        $id = $_POST['id'];

        if ($id) {
            App::get('database')->delete('categories', $id);
        }

        redirect('admin/categories/list');
    }
}
