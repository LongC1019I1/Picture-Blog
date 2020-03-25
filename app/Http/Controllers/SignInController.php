<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function index()
    {
        return view('signin.signin');
    }

    public function signin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password'=>$request->password
        ];

        if (Auth::attempt($data)){
            return redirect('/admin/home');

        }
        return back();
    }
}
