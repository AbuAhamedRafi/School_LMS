<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            if(Auth::guard('admin')->user()->role != 'admin')
            {
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('error','Unauthorized User'); 
            }
            return redirect()->route('admin.dashboard');
        }
        else
        {
            return redirect()->route('admin.login')->with('error','Login failed');
        }
    }
    public function register()
    {
        $user = new User();
        $user->name = 'admin';
        $user->role = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('admin');
        $user->save();
        return redirect()->route('admin.login')->with('success','User Created Successfully');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success','Logged Out Successfully');
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