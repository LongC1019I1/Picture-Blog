<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\post;
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

}
