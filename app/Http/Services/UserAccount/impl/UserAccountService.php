<?php


namespace App\Http\Services\UserAccount\impl;


use App\Http\Repository\UserAccount\eloquent\UserAccountRepo;
use App\Http\Services\UserAccount\UserAccountServiceInterface;

class UserAccountService implements UserAccountServiceInterface
{
    protected $userAccountRepo;

    public function __construct(UserAccountRepo $userAccountRepo)
    {
        $this->userAccountRepo = $userAccountRepo;
    }

    public function getAll()
    {
        $paginate = 10;
       return $this->userAccountRepo->getAll($paginate);
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

    public function findPostById()
    {
        return $this->userAccountRepo->findPostById();
    }


}
