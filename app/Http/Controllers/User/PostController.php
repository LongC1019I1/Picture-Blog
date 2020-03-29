<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function post(post $post)
    {
//        $user= DB::table('users')
//            ->join('posts', 'users.id', '=', 'post.user_id')
//            ->where('users.id', $post->user_id)
//            ->first();
       $user =  DB::table('users')->where('id', $post->user_id)->get();



        return view('user.post',compact('post','user'));
    }

    public function showUserDetail($id)
    {

        $posts = \App\Model\user\User::findOrFail($id)->posts()->where('status', 1)->get();
        $user =  DB::table('users')->where('id', $id)->first();

        return view('user.userdetail',compact('user','posts'));

    }



}
