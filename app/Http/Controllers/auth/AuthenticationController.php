<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    //
    public function getLoginView()
    {
        return response()->view('control-manger.auth.login');
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
}
