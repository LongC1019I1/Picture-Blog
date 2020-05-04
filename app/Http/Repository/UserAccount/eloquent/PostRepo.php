<?php


namespace App\Http\Repository\UserAccount\eloquent;


use App\Http\Repository\UserAccount\PostRepoInterface;
use App\Model\user\post;
use Illuminate\Support\Facades\Auth;

class PostRepo implements PostRepoInterface
{

    protected $post;

    public function __construct( post $post)
    {
        $this->post = $post;
    }

    public function getAll()
    {
     return $this->post::all()->where('user_id', Auth::user()->id);
    }

    public function storeOrUpdate($obj)
    {
       $obj->save();
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
