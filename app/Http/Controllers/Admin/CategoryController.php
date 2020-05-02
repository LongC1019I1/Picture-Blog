<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\impl\CategoryService;
use App\Model\user\category;
use App\Model\user\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
   protected $categoryService;

   public function __construct( CategoryService $categoryService)
   {
       $this->categoryService = $categoryService;
   }

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
        ]);
        $category = new category();

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
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
        $category->slug = Str::slug($request->name);
        $category->save();

        return redirect(route('category.index'));
    }

    public function destroy($id)
    {
        category::where('id',$id)->delete();
        return redirect()->back();
    }
}
