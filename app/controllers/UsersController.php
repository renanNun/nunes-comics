<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function createUser()
    {
        return view('admin/users/add-user');
    }

    public function show()
    {
        $user = App::get('database')->read('users', $_POST['id']);
        return view('admin/users/list-user', compact('user'));
    }

    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('admin/users/view-users', compact('users'));
    }

    public function store()
    {

        App::get('database')->insert('users', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'pic' => $_POST['pic']
        ]);

        return redirect('admin/users/list');
    }

    public function edit()
    {
        $user = App::get('database')->show('users', $_POST['id']);
        return view('admin/users/edit', compact('user'));
    }

    public function delete()
    {
        App::get('database')->delete('users', $_POST['id']);
        return view('admin/users/list');
    }
}
