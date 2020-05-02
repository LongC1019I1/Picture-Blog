<?php


namespace App\Http\Services\Admin\impl;


use App\Http\Repository\Admin\eloquent\CategoryRepo;
use App\Http\Services\Admin\CategoryServiceInterface;

class CategoryService implements CategoryServiceInterface
{
    protected $categoryRepo;

    public function __construct(CategoryRepo $categoryRepo)
    {

        $this->categoryRepo = $categoryRepo;

    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }
}
