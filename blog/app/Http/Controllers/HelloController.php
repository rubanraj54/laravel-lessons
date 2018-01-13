<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function sayHello($id,$name){
        // return $id;
        return view('hello_laravel',['id'=>$id,'name'=>$name]);
    }
}
