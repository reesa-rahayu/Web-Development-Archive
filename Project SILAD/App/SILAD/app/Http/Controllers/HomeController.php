<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function login()
    {
        return view('admin.login');
        // if (Auth::id()) {
        //     $role = Auth()->user()->role;
        //     if ($role == 'admin') {
        //         return view('admin.dashboard');
        //     } else if ($role == 'user') {
        //         return view('dashboard');
        //     }
        // }
    }

    public function checker(Request $request)
    {
        dd($request->all());
    }
}
