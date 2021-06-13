<?php

namespace App\Controllers;

use App\Core\App;


class PagesController{
    public function home(){
        return view('index');
    }

    public function contact(){
        return view('contact');
    }

    public function products(){
        return view('items');
    }

    public function about(){
        return view('about');
    }

    public function login() {
        return view('login');
    }
    
    public function homeAdm(){
        return view('home-adm');
    }

    public function admCategory(){
        return view('categories/admin-list-categories');
    }

    public function formUsers(){
        return view('users/add-user');
    }
}