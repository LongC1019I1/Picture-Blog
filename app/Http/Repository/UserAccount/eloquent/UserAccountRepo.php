<?php


namespace App\Http\Repository\UserAccount\eloquent;


use App\Http\Repository\UserAccount\UserAccountRepoInterface;
use App\Model\user\User;

class UserAccountRepo implements UserAccountRepoInterface
{
        protected $user;

        public function __construct(User $user)
        {
            $this->user = $user;
        }

    public function getAll($paginate=null)
    {
       return $this->user->paginate($paginate);
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


    public function findPostById()
    {
        return $this->user::findOrFail(\Illuminate\Support\Facades\Auth::user()->id)->posts()->get();
    }

}
