<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests;

class AdminUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.admin_home', ['User' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editing
        $users = user::findOrFail($id);
        //return to the edit views
        return view('admin.update', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = user::findOrFail($id);
        $users-> email = $request->email;
        $users-> first_name = $request->first_name;
        $users-> last_name = $request->last_name;
        $users-> company_name = $request->company_name;
        $users-> company_address = $request->company_address;
        $users-> company_registration_no = $request->company_registration_no;
        $users-> contact = $request->contact;
        $users-> logo = $request->logo;
        $users->save();

        return redirect()->route('users.index')->with('success', 'Data has been saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete employee
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('users.index')->with('success', 'Data has been saved');
    }
}
