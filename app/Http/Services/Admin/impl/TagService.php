<?php


namespace App\Http\Services\Admin\impl;


use App\Http\Repository\Admin\eloquent\TagRepo;
use App\Http\Services\Admin\TagServiceInterface;

class TagService implements TagServiceInterface
{
    protected $tagRepo;

    public function __construct( TagRepo $tagRepo)
    {
        $this->tagRepo = $tagRepo;
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
