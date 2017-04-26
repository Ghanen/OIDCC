<?php

namespace App\Http\Controllers;

use App\Employee;
use Sentinel;
use Illuminate\Http\Request;

use App\User;

class systemUsersController extends Controller
{
    public function userHome()
    {
    	return view('systemUsers.user_home');
    }

    public function design()
    {
        $company = Sentinel::getUser()->id;
        $Employee = Employee::where('user_id',$company)->get();
//        $Employees = Employee::where('user_id',$company)->get();
            return view('systemUsers.design')->with('Employee', $Employee);


    }

    public function postDesign(Request $request)
    {
        $selectId = $request->id;
        $company = Sentinel::getUser()->id;
        $Employees = Employee::where('user_id',$company)->get();
        $Employee = Employee::where('id',$selectId)->where('user_id',$company)->get();
        return view('systemUsers.design')->with('Employee',$Employee)->with('Employees',$Employees);

    }

    public function templates()
    {
        $company = Sentinel::getUser()->id;
        $Employee = Employee::where('user_id',$company)->get();
        return view('systemUsers.template')->with('Employee',$Employee);
    }

    public function posttemplates(Request $request)
    {
        $selectId = $request->id;
        $company = Sentinel::getUser()->id;
        $Employees = Employee::where('user_id',$company)->get();
        $Employee = Employee::where('id',$selectId)->where('user_id',$company)->get();
        return view('systemUsers.template')->with('Employee',$Employee)->with('Employees',$Employees);

    }

    public function templates2()
    {
        $company = Sentinel::getUser()->id;
        $Employee = Employee::where('user_id',$company)->get();
        return view('systemUsers.template2')->with('Employee',$Employee);
    }

    public function posttemplates2(Request $request)
    {
        $selectId = $request->id;
        $company = Sentinel::getUser()->id;
        $Employees = Employee::where('user_id',$company)->get();
        $Employee = Employee::where('id',$selectId)->where('user_id',$company)->get();
        return view('systemUsers.template2')->with('Employee',$Employee)->with('Employees',$Employees);

    }

    public function templates3()
    {
        $company = Sentinel::getUser()->id;
        $Employee = Employee::where('user_id',$company)->get();
        return view('systemUsers.template3')->with('Employee',$Employee);
    }

    public function posttemplates3(Request $request)
    {
        $selectId = $request->id;
        $company = Sentinel::getUser()->id;
        $Employees = Employee::where('user_id',$company)->get();
        $Employee = Employee::where('id',$selectId)->where('user_id',$company)->get();
        return view('systemUsers.template3')->with('Employee',$Employee)->with('Employees',$Employees);

    }
}
