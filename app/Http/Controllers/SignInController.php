<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestFormSignin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function index()
    {
        return view('signin.signin');
    }

    public function signin(RequestFormSignin $request)
    {
        $data = [
            'email' => $request->email,
            'password'=>$request->password
        ];
        $remember = $request->remember;
        if (Auth::attempt($data, $remember) ){
            return redirect('/admin/home');

        }
        return back()->with('wrong', "Wrong password! Try again!");
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/signin');
    }
}
