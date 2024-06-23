<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate(
            ['email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            echo "ok";
        }
        else
        {
            return redirect()->route('admin.login')->with('error','Login failed');
        }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function form()
    {
        return view('admin.form');
    }
    public function table()
    {
        return view('admin.table');
    }
}