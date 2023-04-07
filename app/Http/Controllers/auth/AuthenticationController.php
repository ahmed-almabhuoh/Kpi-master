<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\Boss;
use App\Models\manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    //
    public function getLoginView()
    {
        return response()->view('control-manager.auth.login-admin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        //
        $credentials = [
            'email' => $request->post('username'),
            'password' => $request->post('password'),
        ];

        if (Auth::guard('admin')->attempt($credentials, true)) {
            return redirect()->route('cpanel');
        } else {
            return redirect()->route('login')->with([
                'message' => 'Wrong credintials!',
            ]);
        }
    }

    public function logout () {
        if (auth('admin')->check()) {
            Session::flush();
            Auth::logout();

            return redirect()->route('login');
        }
    }
    public function bossGetLoginView()
    {
        return response()->view('control-manager.auth.login-boss');
    }
    


    public function bossLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        //
        $credentials = [
            'email' => $request->post('email'),
            'password' => $request->post('password'),
        ];

        if (Auth::guard('boss')->attempt($credentials, true)) {
            return redirect()->route('cpanel');
        } else {
            return redirect()->route('cpanel')->withErrors([
                'message' => 'Wrong credintials!',
            ]);
        }
    }
    public function logoutBoss () {
        if (auth('boss')->check()) {
            Session::flush();
            Auth::logout();

            return redirect()->route('login');
        }
    }
    public function bossGetLoginUpView()
    {
        return response()->view('control-manager.auth.loginUp-boss');
    }
    public function bossLoginU(AuthRequest $request){

        
        
        $boss=  Boss::create([
            'fname'=>$request->post('firstName'),
            'lname'=>$request->post('lastName'),
            'email'=>$request->post('email'),
            'password'=>$request->post('password'),
          ]);
        $boss->save();
        
            return redirect()->route('Start');
       

    }


    public function managerGetLoginView()
    {
        return response()->view('control-manager.auth.login-manager');
    }
    


    public function managerLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        //
        $credentials = [
            'email' => $request->post('email'),
            'password' => $request->post('password'),
        ];

        if (Auth::guard('manager')->attempt($credentials, true)) {
            return redirect()->route('cpanel');
        } else {
            return redirect()->route('cpanel')->withErrors([
                'message' => 'Wrong credintials!',
            ]);
        }
    }
    public function logoutManager () {
        if (auth('manager')->check()) {
            Session::flush();
            Auth::logout();

            return redirect()->route('login');
        }
    }
    public function managerGetLoginUpView()
    {
        return response()->view('control-manager.auth.loginUp-manager');
    }
    public function managerLoginU(AuthRequest $request){

        
        
        $boss=  manager::create([
            'fname'=>$request->post('firstName'),
            'lname'=>$request->post('lastName'),
            'email'=>$request->post('email'),
            'password'=>$request->post('password'),
          ]);
        $boss->save();
        
            return redirect()->route('Sconed');
       

    }

  
}
