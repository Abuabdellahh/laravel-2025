<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $name;
    protected $age;
    // constructor  
    public function __construct()
    {
        $this->name = "Eibrahim";
        $this->age = 100;
    }
    
    //
    public function index(){
        
        $name = $this->helloWorld();  
        return $name;
    }
    public function teacher($id, $name){
        return view('teacher', ['id' => $id, 'name' => $name]);
    }

    // private function
 private function helloWorld(){
        return "hello world";
    }
       
}
    

