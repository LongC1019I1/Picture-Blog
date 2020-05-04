<?php


namespace App\Http\Repository\Admin\eloquent;


use App\Http\Repository\Admin\CategoryRepoInterface;
use App\Model\user\category;

class CategoryRepo implements CategoryRepoInterface
{

    protected $category;

    public function __construct(category $category)
    {
        $this->category = $category;
    }

    public function getAll()
    {
       return $this->category->all();
    }

    public function storeOrUpdate($obj)
    {
       return $obj->save();
    }

    public function delete($obj)
    {
        return $this->category->where('id',$obj)->delete();
    }

    public function findById($id)
    {
            return $this->category->where('id',$id)->first();


    }

}
