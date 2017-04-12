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

//for admin
Route::get('/admin_home', 'AdminController@adminHome')->middleware('admin');
Route::group(['middleware' => ['admin']], function()
{
    Route::resource('users','AdminUDController');
});

//Route::post('/delete', 'AdminController@destroy');
Route::get('/update', 'AdminController@update')->middleware('admin');

//for users updating profile
Route::group(['middleware' => ['systemUser']], function()
{
    Route::resource('profile','UserController');
});

//for user adding, updating and editing employee
Route::group(['middleware' => ['systemUser']], function()
{
    Route::resource('employee','EmployeeController');
});
Route::get('/user_home', 'systemUsersController@userHome')->middleware('systemUser');
//Route::get('/pages/addEmployee', 'SystemUsersController@addEmployee')->middleware('systemUser');
//Route::get('/pages/employeeList', 'EmployeeController@employeeList')->middleware('systemUser');
Route::get('/design', 'SystemUsersController@design')->middleware('systemUser');

//for design
Route::get('/design', 'DesignController@userid')->middleware('systemUser');
Route::post('/design', 'DesignController@userid')->middleware('systemUser');

Route::post('/go', 'DesignController@postgo')->middleware('systemUser');


Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate');
// // Route::delete('user/{id}/delete', 'AdminController@destroy')->middleware('admin');;
// Route::delete('user/{id}/delete', ['middleware' => ['admin'], 
//                                    'uses' => 'AdminController@destroy']);

