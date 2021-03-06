<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\UsersService;
use App\Model\user\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $users = User::all();
        return view('admin.User.list', compact('users'));
    }

    public function create()
    {

        return view('admin.User.create');
    }

}
