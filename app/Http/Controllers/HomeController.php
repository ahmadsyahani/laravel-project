<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function halaman2(){
        return view('halaman2');
    }

    public function app(){
        return view('app');
    }
}
