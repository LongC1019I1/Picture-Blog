<?php


namespace App\Http\Services\Admin\impl;


use App\Http\Repository\Admin\eloquent\PostRepo;
use App\Http\Repository\Admin\eloquent\TagRepo;
use App\Http\Services\Admin\PostServiceInterface;

class PostService implements PostServiceInterface
{

    protected $postRepo;

    public function __construct(PostRepo $postRepo)
    {

        $this->postRepo = $postRepo;

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
