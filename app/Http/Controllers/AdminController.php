<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{
    public function adminHome()
    {
    	$users = user::all();
    	return view('admin.admin_home', ['users' => $users]);
    }

    public function update()
    {
        return view('admin.update');
    }

    public function userUpdate(Request $request)
    {
        //
    }
}
