<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show(Request $request){


        $users = User::join('departments', 'users.Fk_department', '=', 'departments.id')
                       ->join('designations', 'users.Fk_designation', '=', 'designations.id')
                       ->select('users.*', 'designations.name as designation_name', 'departments.name as department_name')
                       ->get();

        

        return view('index',compact('users'));


    }

    public function search(Request $request)
    {

        $output = '';

        $users = User::join('departments', 'users.Fk_department', '=', 'departments.id')
                        ->join('designations', 'users.Fk_designation', '=', 'designations.id')
                        ->select('users.*', 'designations.name as designation_name', 'departments.name as department_name')
                        ->where('users.Name', 'LIKE', '%'.$request->search.'%')
                        ->orWhere('designations.name', 'LIKE', '%'.$request->search.'%')
                        ->orWhere('departments.name', 'LIKE', '%'.$request->search.'%')
                        ->get();                

    

        return response()->json($users);


    }
}
