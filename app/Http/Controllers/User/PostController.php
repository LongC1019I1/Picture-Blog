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


        $postDoisong= DB::table('category_posts')
            ->join('categories', 'category_posts.category_id', '=', 'categories.id')
            ->join('posts', 'category_posts.post_id', '=', 'posts.id')
            ->where('categories.slug', '=', 'doi-song')
            ->where('status',1)
            ->inRandomOrder()
            ->first();

        $postSuckhoe= DB::table('category_posts')
            ->join('categories', 'category_posts.category_id', '=', 'categories.id')
            ->join('posts', 'category_posts.post_id', '=', 'posts.id')
            ->where('categories.slug', '=', 'suc-khoe')
            ->where('status',1)
            ->inRandomOrder()
            ->first();

        $postTintuc= DB::table('category_posts')
            ->join('categories', 'category_posts.category_id', '=', 'categories.id')
            ->join('posts', 'category_posts.post_id', '=', 'posts.id')
            ->where('categories.slug', '=', 'suc-khoe')
            ->where('status',1)
            ->inRandomOrder()
            ->first();



        return view('user.post',compact('post','user','postDoisong','postTintuc','postSuckhoe'));
    }

    public function showUserDetail($id)
    {

        $posts = \App\Model\user\User::findOrFail($id)->posts()->where('status', 1)->get();
        $user =  DB::table('users')->where('id', $id)->first();

        return view('user.userdetail',compact('user','posts'));

    }



}
