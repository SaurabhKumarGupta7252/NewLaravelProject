<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function users(Request $request){
        $page_no = $request->page_no;
        $data = Http::get("https://reqres.in/api/users?page={$page_no}");
        echo "https://reqres.in/api/users?page={$page_no}";
        return view('users', ['users'=>$data['data']]);
    }
}
