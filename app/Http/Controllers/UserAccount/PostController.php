<?php

namespace App\Http\Controllers\UserAccount;

use App\Http\Controllers\Controller;


use App\Http\Services\Admin\impl\CategoryService;
use App\Http\Services\UserAccount\impl\PostService;
use App\Http\Services\UserAccount\impl\TagService;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{

    protected $postService;

    protected $categoryService;

    public function __construct(PostService $postService, CategoryService $categoryService, TagService $tagService)
    {
        $this->postService = $postService;
        $this->categoryService = $categoryService;
        $this->tagService = $tagService;
    }


    public function index()
    {
        $posts = $this->postService->getAll();
        return view('admin.post.show', compact('posts'));
    }

    public function create()
    {


        $tags = $this->tagService->getAll();
        $categories = $this->categoryService->getAll();

        return view('admin.post.post', compact('tags', 'categories'));
    }


    public function store(Request $request)
    {

        $this->postService->create($request);

        return redirect(route('PostAll'));
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
        $this->postService->update($request, $id);

        return redirect(route('PostAll'));

    }


    public function destroy($id)
    {
        post::where('id', $id)->delete();
        return redirect()->back();

    }


}
