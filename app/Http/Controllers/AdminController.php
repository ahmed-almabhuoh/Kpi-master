<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $entries = DB::table('admins');
        return view('Admin.index',compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       //$admin = Admin::all();
        return view('Admin.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

      //  $admin = Admin::create($request->all());
        $admin =  Admin::create([
          'fname'=>$request->post('fname'),
          'lname'=>$request->post('lname'),
          'identity_no'=>$request->post('identity_no'),
          'Phone'=>$request->post('Phone'),
          'BOD'=>$request->post('BOD'),
          'email'=>$request->post('email'),   
          'password'=>$request->post('password'),
        ]);
        $admin->save();
      // return redirect(route('Admin/login'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
