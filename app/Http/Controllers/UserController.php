<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function user($name) {
        return '<h1>User controller called the user function to show your name: '.$name.'</h1>';
    }

    function show($name){
        return view('about', ['name' => $name]);
    }
}
