<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CategoriesController
{
    public function addCategory()
    {
        return view('admin/admin-add-category');
    }

    public function viewCategory()
    {
        // $category_id = $_GET['id'];
        // // $products = App::get('database')->selectJoin('products', 'categories', $category_id);
        // $products = App::get('database')->selectProducts($category_id);

        // return view('admin/admin-view-category', compact('products'));
        return view('admin/admin-view-category');
    }

    public function editCategory()
    {
        $id = $_GET['id'];
        $category = App::get('database')->select('categories', $id);

        return view('admin/admin-edit-category', compact('category'));
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
            App::get('database')->delete('categories', $_POST['id']);
        }

        redirect('admin/categories/list');
    }
}
