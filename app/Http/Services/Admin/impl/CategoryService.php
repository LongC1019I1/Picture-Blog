<?php


namespace App\Http\Services\Admin\impl;


use App\Http\Repository\Admin\eloquent\CategoryRepo;
use App\Http\Services\Admin\CategoryServiceInterface;
use App\Model\user\category;
use Illuminate\Support\Str;

class CategoryService implements CategoryServiceInterface
{
    protected $categoryRepo;

    public function __construct(CategoryRepo $categoryRepo)
    {

        $this->categoryRepo = $categoryRepo;

    }

    public function getAll()
    {
       return $this->categoryRepo->getAll();
    }

    public function create($request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category = new category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $this->categoryRepo->storeOrUpdate($category);

    }

    public function update($request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
//        $category = category::find($id);
        $category= $this->categoryRepo->findById($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $this->categoryRepo->storeOrUpdate($category);
    }

    public function destroy($id)
    {
        return $this->categoryRepo->delete($id);
    }

    public function findById($id)
    {
       return $this->categoryRepo->findById($id);
    }
}
