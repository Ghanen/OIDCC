<?php

namespace App\Http\Controllers;
use App\Employee;
use App\country;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function userid()
    {
        $employee = Employee::all();
        return view('systemUsers.design')->with('Employee', $employee);
    }

    public function postgo($id)
    {
        $company = Sentinel::getUser()->id;
        $employee = Employee::where('user_id',$company)->get();
        return view('systemUsers.design', compact('employee'));
    }
}
