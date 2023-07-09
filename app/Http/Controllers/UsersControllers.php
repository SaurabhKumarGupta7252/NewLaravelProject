<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersControllers extends Controller
{
    //
    // function users(){
    //     return view('users', ['user' => 'Saurabh']);
    // }

    function users(){
        return view('users', ['user' => ['Saurabh', 'Rahul', 'Ankush', 'Ajeet']]);
    }
}
