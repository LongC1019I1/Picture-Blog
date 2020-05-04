<?php

namespace App\Http\Controllers\UserAccount;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\impl\TagService;
use App\Model\user\tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $tagService;

    public function __construct( TagService $tagService)
    {
        $this->tagService = $tagService;
    }

    public function index()
    {
        $tags = tag::all();
        return view('admin.tag.show', compact('tags'));
    }


    public function create()
    {
        return view('admin.tag.tag');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'slug'=>'required'
        ]);
        $tag = new tag();

        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();

        return redirect(route('tag.index'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tag = tag::where('id',$id)->first();
        return view('admin.tag.edit',compact('tag'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
        ]);
        $tag = tag::find($id);
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();

        return redirect(route('tag.index'));
    }


    public function destroy($id)
    {
        tag::where('id',$id)->delete();
        return redirect()->back();
    }
}
