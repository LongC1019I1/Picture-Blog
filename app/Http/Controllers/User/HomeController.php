<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\category_post;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(category $category){
        $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(6);
//        $postCate = $category->posts();

        $postCate = DB::table('category_posts')
            ->join('categories', 'category_posts.category_id', '=', 'categories.id')
            ->join('posts', 'category_posts.post_id', '=', 'posts.id')
            ->where('categories.slug', '=', 'doi-song')
            ->take(1)
            ->get();

        return view('user.blog', compact('posts','postCate'));
    }

    public function tag(tag $tag){

        $posts= $tag->posts();
        return view('user.category', compact('posts'));

    }

    public function category(category $category){

        $posts= $category->posts();
        return view('user.category', compact('posts'));

    }
}
