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
    function allEmployee(){
        return DB::select("select * from employees");
    }

    //data using custom model
    function getCustomModelData(){
        return CustomModel::all();
    }

    function getEmployee(){
        return Employee::all();
    }

    function getEmpData(Request $request) {
        $list = DB::select("select * from employees where id=".$request-> id);
        if (sizeof($list) == 0) {
            $list = [];
        } else if(sizeof($list) == 1)
            $list = $list[0];
        $data = [
            'code'=>200,
            'message'=>'Success',
            'version'=>'1.2.0',
            'is_paid'=> false,
            'data_list'=> $list
        ];
        return response()->json($data);
    }
}
