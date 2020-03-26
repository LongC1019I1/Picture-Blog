<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\category_post;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(User $user){
//        $user = Auth::user();
        $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(6);
//        $postCate = $category->posts();

        $postLichsu= DB::table('category_posts')
            ->join('categories', 'category_posts.category_id', '=', 'categories.id')
            ->join('posts', 'category_posts.post_id', '=', 'posts.id')
            ->where('categories.slug', '=', 'lich-su')
            ->first();

        $postChinhtri= DB::table('category_posts')
            ->join('categories', 'category_posts.category_id', '=', 'categories.id')
            ->join('posts', 'category_posts.post_id', '=', 'posts.id')
            ->where('categories.slug', '=', 'chinh-tri')
            ->first();

        dd($user::findOrFail(1)->posts()->get());
//      $postUser = $user->posts()->get();
//        dd($postUser);

        return view('user.blog', compact('posts','postLichsu','postChinhtri'));
    }

    public function tag(tag $tag){

        $posts= $tag->posts();
        return view('user.category', compact('posts'));

    }

    public function category(category $category){

        $posts= $category->posts();
        return view('user.category', compact('posts'));

    }

    public function user(User $user){



    }
}
