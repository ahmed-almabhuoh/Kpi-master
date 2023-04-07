<?php

namespace App\Http\Controllers;

use App\Models\Boss;
use Illuminate\Http\Request;

class BossController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Boss.signUp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
      //  $boss = Boss::craate($request->all());
        $boss=  Boss::create([
            'fname'=>$request->post('firstName'),
            'lname'=>$request->post('lastName'),
            'email'=>$request->post('email'),
            'password'=>$request->post('password'),
          ]);
        $boss->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Boss $boss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boss $boss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boss $boss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boss $boss)
    {
        //
    }
}
