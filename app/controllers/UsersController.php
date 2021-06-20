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
        if (isset($_FILES['pic'])) {
            $extension = strtolower(substr($_FILES['pic']['name'], -4));
            $new_name = md5(time()) . $extension;
            $file = "/public/img/users";

            move_uploaded_file($_FILES['pic']['new_name'], $file . $new_name);
        }

    
        $encript =  md5($_POST['password']);

        App::get('database')->insert('users', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $encript,
            'pic' => $_POST['pic']
        ]);

        return redirect('admin/users/list');
    }

    public function edit()
    {
        App::get('database')->edit('users', $_POST['id'],
        [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'pic' => $_POST['pic'] 
        ]);

        
        return redirect('admin/users/list');
    }

    public function showEdit()
    {
        $user = App::get('database')->read('users', $_POST['id']);
        return view('admin/users/edit-user', compact('user'));
    }

    public function delete()
    {
        App::get('database')->delete('users', $_POST['id']);
        return redirect('admin/users/list');
    }
}
