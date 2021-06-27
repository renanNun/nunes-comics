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
        $file = "../../../public/img/users/" . $_POST['pic'];
        $encript =  md5($_POST['password']);

        if(isset($_POST['email']) && isset($_POST['name'])){

            App::get('database')->insert('users', [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $encript,
                'pic' => $file
            ]);
        }

        return redirect('admin/users/list');
    }

    public function edit()
    {
        $file = "../../../public/img/users/" . $_POST['pic'];
        $encript =  md5($_POST['password']);

        if(!empty($_POST['pic'])){
            $file = "../../../public/img/users/" . $_POST['pic'];

            App::get('database')->edit('users', $_POST['id'],
            [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $encript,
                'pic' => $file 
            ]);
        }
        else{
            App::get('database')->edit('users', $_POST['id'],
            [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $encript
            ]);
        }


        
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
