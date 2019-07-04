<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    

    function add(){
        return view('add');
    }

    

    function edit(){
        return view('edit');
    }

    function index(){
        return view('index');
    }

    function view(){
        return view('view');
    }

}
