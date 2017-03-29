<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;

use Cartalyst\Sentinel\Checkpoints\ThrottlingException;

use Cartalyst\Sentinel\Checkpoints\NotActivatedException;


class LoginController extends Controller
{
    public function login()
    {
    	return view('authentication.login');
    }

    public function postLogin(Request $request)
    {
        try
        {
            $rememberMe = false;
            if(isset($request->remember_me))
                $rememberMe = true;
                if(Sentinel::authenticate($request->all(), $rememberMe, false))
                {
                    $company=$request->company_name;
                    if((Sentinel::getUser()->company_name)==$company){
                        $user=Sentinel::findById(Sentinel::getUser()->id);
                        Sentinel::login($user);
                    }
                    else{
//                        return redirect('/login');
                        return redirect()->back()->with(['error'=>'Company Name does not match!.']);
                    }
                    $slug = Sentinel::getUser()->roles()->first()->slug;

                    if ($slug == 'admin')
                        return redirect('/admin_home');
                    elseif ($slug == 'systemUsers')
                        return redirect('/user_home');
                }

            else
            {
                return redirect()->back()->with(['error'=>'Wrong Username or Password!.']);
            }
        }

        catch (ThrottlingException $exception)
        {
            $delay = $exception->getDelay();
            return redirect()->back()->with(['error'=>"You are banned for $delay seconds."]);
        }	

        catch (NotActivatedException $exception)
        {
            return redirect()->back()->with(['error'=>"Your account is not activated."]);
        }
    	
    }

    public function logout()
    {
    	Sentinel::logout();
    	return redirect('/login');
    }
}
