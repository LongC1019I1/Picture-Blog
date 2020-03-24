<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = post::all();
        return view('admin.post.show', compact('posts'));
    }

    public function create()
    {

        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.post',compact('tags','categories'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);


        if ($request->hasFile('image')){
            $imageName = $request->image->store('public');
        }

        $post = new Post;
        $post->title = $request->title;
        $post->image = $imageName;
        $post->subtitle = $request->subtitle;
        $post->slug =$request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect(route('post.index'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $post = post::with('tags','categories')->where('id',$id)->first();
        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.edit',compact('tags','categories','post'));

    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        $post = post::with('tags','categories')->where('id',$id)->first();


        $image = $post->image;

        if ($request->hasFile('image')){
            $image = $request->image->store('public');
        }

        $post = post::find($id);
        $post->title = $request->title;
        $post->image = $image;
        $post->subtitle = $request->subtitle;
        $post->slug =$request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();


        return redirect(route('post.index'));

    }


    public function destroy($id)
    {
       post::where('id',$id)->delete();
       return redirect()->back();

    }


}
