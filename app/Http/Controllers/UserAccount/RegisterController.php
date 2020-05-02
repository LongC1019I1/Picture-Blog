<?php

namespace App\Http\Controllers\UserAccount;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('useraccount.signin.register');
    }

    public function register(Request $request)
    {

        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        if (!$request->hasFile('avatar')) {
            $image_name = 'no_image.png';
        } else {
            $image = $request->file('image');
            $image_name = 'images/' . date('d-m-Y_H:i:s') . '.' . $image->getClientOriginalName();
            $image->storeAs('public/images', $image_name);
        }
        $user->avatar = $image_name;
        $user->save();
        return redirect()->route('signin.index');
    }
}
