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
            ->where('status',1)
            ->inRandomOrder()
            ->first();

        $postChinhtri= DB::table('category_posts')
            ->join('categories', 'category_posts.category_id', '=', 'categories.id')
            ->join('posts', 'category_posts.post_id', '=', 'posts.id')
            ->where('categories.slug', '=', 'chinh-tri')
            ->where('status',1)
            ->inRandomOrder()
            ->first();


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

        $postGiaitri= DB::table('category_posts')
            ->join('categories', 'category_posts.category_id', '=', 'categories.id')
            ->join('posts', 'category_posts.post_id', '=', 'posts.id')
            ->where('categories.slug', '=', 'giai-tri')
            ->where('status',1)
            ->inRandomOrder()
            ->first();

        $postDulich= DB::table('category_posts')
            ->join('categories', 'category_posts.category_id', '=', 'categories.id')
            ->join('posts', 'category_posts.post_id', '=', 'posts.id')
            ->where('categories.slug', '=', 'du-lich')
            ->where('status',1)
            ->inRandomOrder()
            ->first();
//        dd($user::findOrFail(1)->posts()->get());
//      $postUser = $user->posts()->get();
//        dd($postUser);

        return view('user.blog', compact('posts','postLichsu','postChinhtri','postDoisong','postSuckhoe','postTintuc','postDulich','postGiaitri'));
    }

    public function tag(tag $tag, $slug){


        $posts= DB::table('tags')->where('tags.slug','=',$slug)->posts();
        dd($posts);
        return view('user.category', compact('posts'));

    }

    public function category(category $category){

        $posts= $category->posts();

        return view('user.category', compact('posts','category'));

    }

    public function user(User $user){



    }
}
