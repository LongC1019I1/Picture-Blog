<?php


namespace App\Http\Repository\UserAccount\eloquent;


use App\Http\Repository\UserAccount\TagRepoInterface;
use App\Model\user\tag;

class TagRepo implements TagRepoInterface
{

    protected $tag;

    public function __construct(tag $tag)
    {
        $this->tag = $tag;
    }

    public function getAll()
    {
        return $this->tag::all();
    }

    public function storeOrUpdate($obj)
    {
        // TODO: Implement storeOrUpdate() method.
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }
}
