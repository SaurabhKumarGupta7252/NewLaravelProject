<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\CustomModel;
use App\Models\Employee;

class UserController extends Controller
{
    //data using SQL Query
    function showUsers(){
        return DB::select("select * from users");
    }

    //data using model
    function getData() {
        return User::all();
    }

    //data using custom model
    function getCustomModelData(){
        return CustomModel::all();
    }

    //data for another table;
    function getEmployee(){
        return Employee::all();
    }

    function getEmpData() {
        return DB::select("select * from employees where serial_no = '1'");
    }
}
