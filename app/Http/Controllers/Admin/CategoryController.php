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

        $categories = $this->categoryService->getAll();

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

        $this->categoryService->create($request);

        return redirect(route('category.index'));
    }


    public function show($id)
    {
    }


    public function edit($id)
    {


        $category = $this->categoryService->findById($id);

        return view('admin.category.edit',compact('category'));
    }


    public function update(Request $request, $id)
    {


        $this->categoryService->update($request, $id);

        return redirect(route('category.index'));
    }

    public function destroy($id)
    {

        $this->categoryService->destroy($id);
        return redirect()->back();
    }
}
