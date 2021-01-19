<?php

namespace App\Http\Controllers\adminPanel\login;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\login\loginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminLoginController extends Controller
{
    public function index()
    {
        return view('adminPanel.auth.home');
    }

    public function login(loginRequest $request)
    {

        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('admin.home');
        }

        return redirect()->back()->with('error', 'هناك خطأ في البيانات');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login.home');
    }
}
