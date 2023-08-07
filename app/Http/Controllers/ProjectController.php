<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project(){
        return view('project');
    }

    public function index(){
        return view('admin.masterproject');
    }
}
