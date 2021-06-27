<?php

namespace App\Controllers;

use App\Core\App;

class UsersController extends LoginController
{
    public function createUser()
    {
        session_start();
        $this->sessionVerify();
        return view('admin/users/add-user');
    }

    public function show()
    {
        session_start();
        $this->sessionVerify();
        $user = App::get('database')->read('users', $_POST['id']);

        return view('admin/users/list-user', compact('user'));
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
                redirect('admin/users/list');
            }
        }

        $items_per_page = 10;
        $start_limit = $items_per_page * $page - $items_per_page;

        $users = App::get('database')->selectAll('users', $start_limit, $items_per_page);
        $rows_count = App::get('database')->countAll('users');

        $total_pages = ceil($rows_count / $items_per_page);

        return view('admin/users/view-users', compact('users', 'page', 'total_pages'));
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
        session_start();
        $this->sessionVerify();
        $file = "../../../public/img/users/" . $_POST['pic'];
        $encript =  md5($_POST['password']);

        if(!empty($_POST['pic'])){
            $file = "../../../public/img/users/" . $_POST['pic'];

            App::get('database')->edit('users',
            [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $encript,
                'pic' => $file 
            ], $_POST['id']);
        }
        else{
            App::get('database')->edit('users',
            [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $encript
            ], $_POST['id']);
        }

        return redirect('admin/users/list');
    }

    public function showEdit()
    {
        session_start();
        $this->sessionVerify();
        $user = App::get('database')->read('users', $_POST['id']);
        return view('admin/users/edit-user', compact('user'));
    }

    public function delete()
    {
        App::get('database')->delete('users', $_POST['id']);
        return redirect('admin/users/list');
    }
}
