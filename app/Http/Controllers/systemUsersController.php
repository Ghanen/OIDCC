<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class systemUsersController extends Controller
{
    public function userHome()
    {
    	return view('systemUsers.user_home');
    }

    public function design()
    {
        return view('systemUsers.design');
    }
}
