<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
       return view('admin.auth.login');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {
        if (auth()->guard('admin')->attempt($request->only('username', 'password'))) {
            {
                return redirect()->intended(route('dashboard'));
            }
        }
        return redirect()->back()->withErrors(['username' => trans('auth.failed')]);

    }
    public function logout()
    {
         auth()->guard('admin')->logout();
         return redirect()->route('login');
    }


}
