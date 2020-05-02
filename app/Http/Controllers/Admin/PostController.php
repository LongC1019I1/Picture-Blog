<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\impl\PostService;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{

    protected $postService;

    public function __construct( PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = post::all()->where('user_id', Auth::user()->id);
        return view('admin.post.show', compact('posts'));
    }

    public function create()
    {

        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.post', compact('tags', 'categories'));
    }


    public function store(Request $request)
    {


        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        $post = new Post;
        $post->title = $request->title;
        $post->image = $imageName;
        $post->subtitle = $request->subtitle;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->status = $request->status;
        $post->user_id = Auth::user()->id;
        $post->save();
//        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        if ($post) {
            $tagNames = explode(',', $request->get('tags'));
            $tagIds = [];
            foreach ($tagNames as $tagName) {
                //$post->tags()->create(['name'=>$tagName]);
                //Or to take care of avoiding duplication of Tag
                //you could substitute the above line as

//                    $authorModel = Authors::where($column , '=', $id)->first();
                $tagInPost = tag::where('name', '=', $tagName);

                if ($tagInPost) {
                    $tag = new tag();
                    $tag->name = $tagName;
                    $tag->slug = Str::slug($tagName);
                    $tag->save();
                }

                $tagIds[] = $tag->id;

            }


            $post->tags()->sync($tagIds);
//            $post->tags()->sync($request->tags);
            return redirect(route('PostAll'));
        }

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $post = post::with('tags', 'categories')->where('id', $id)->first();
        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.edit', compact('tags', 'categories', 'post'));

    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
//            'slug' => 'required',
            'body' => 'required',
        ]);

        $post = post::with('tags', 'categories')->where('id', $id)->first();


        $image = $post->image;

        if ($request->hasFile('image')) {
            $image = $request->image->store('public');
        }

        $post = post::find($id);
        $post->title = $request->title;
        $post->image = $image;
        $post->subtitle = $request->subtitle;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->status = $request->status;
//            $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();

        if ($post) {
            $tagNames = explode(',', $request->get('tags'));
            $tagIds = [];
            foreach ($tagNames as $tagName) {
                //$post->tags()->create(['name'=>$tagName]);
                //Or to take care of avoiding duplication of Tag
                //you could substitute the above line as

//                    $authorModel = Authors::where($column , '=', $id)->first();
                $tagInPost = tag::where('name', '=', $tagName);

                if ($tagInPost) {
                    $tag = new tag();
                    $tag->name = $tagName;
                    $tag->slug = Str::slug($tagName);
                    $tag->save();
                }

                $tagIds[] = $tag->id;

            }


            $post->tags()->sync($tagIds);
            return redirect(route('PostAll'));

        }
    }


    public function destroy($id)
    {
        post::where('id', $id)->delete();
        return redirect()->back();

    }


}
