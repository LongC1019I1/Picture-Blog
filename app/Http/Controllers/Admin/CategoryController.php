<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();
        return view('admin.category.show',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.category');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'slug'=>'required'
        ]);
        $category = new category();

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        return redirect(route('category.index'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = category::where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
        ]);
        $category = category::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        return redirect(route('category.index'));
    }

    public function destroy($id)
    {
        category::where('id',$id)->delete();
        return redirect()->back();
    }
}
