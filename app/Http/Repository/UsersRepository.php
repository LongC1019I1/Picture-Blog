<?php


namespace App\Http\Repository;


use App\Contract\RepositoryInterface;
use App\Contract\user\UsersRepositoryInterface;
use App\User;

class UsersRepository implements UsersRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function model()
    {
        return $this->user;
    }

    public function all($paginate)
    {
        if ($paginate) {
            return $this->user->paginate($paginate);
        }
        return $this->user->all();
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }

    public function store($user)
    {
        return $user->save();
    }
}
