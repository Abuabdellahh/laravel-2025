<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        return "Hello from Student Controller";
    }

    public function teacher(){
        return 'Hello from Teacher Controller';
    }
}
