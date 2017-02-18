<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'visitors'], function(){
	Route::get('/register', 'RegistrationController@register');
	Route::post('/register', 'RegistrationController@postRegister');

	Route::get('/login', 'LoginController@login');
	Route::post('/login', 'LoginController@postLogin');

	Route::get('/forget-password', 'ForgetPasswordController@forgetPassword');
	Route::post('/forget-password', 'ForgetPasswordController@postForgetPassword');

	Route::get('/reset/{email}/{resetCode}', 'ForgetPasswordController@resetPassword');

	Route::post('/reset/{email}/{resetCode}', 'ForgetPasswordController@postResetPassword');
});

Route::post('/logout', 'LoginController@logout');

Route::get('/admin_home', 'AdminController@adminHome')->middleware('admin');
Route::get('/user_home', 'systemUsersController@userHome')->middleware('systemUser');

Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate');
