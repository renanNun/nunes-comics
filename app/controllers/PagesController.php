<?php

namespace App\Controllers;

use App\Core\App;


class PagesController{
    public function home(){
        return view('site/index');
    }

    public function contact(){
        return view('site/contact');
    }

    public function products(){
        return view('site/items');
    }

    public function about(){
        return view('site/about');
    }

    public function login() {
        return view('site/login');
    }
    
    public function homeAdm(){
        return view('admin/home-adm');
    }
}