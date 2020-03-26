<?php


namespace App\Http\Service;


use App\Contract\ServiceInterface;
use App\Contract\user\UsersRepositoryInterface;
use App\Contract\user\UsersServiceInterface;
use Illuminate\Support\Facades\Hash;

class UsersService implements UsersServiceInterface
{
    protected $userRepo;

    public function __construct(UsersRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function all($paginate=null)
    {
        return $this->userRepo->all($paginate);
    }

    public function create($request)
    {
        $user = $this->userRepo->model();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->avatar = $request->avatar;
        $user->role = $request->role;

        $this->userRepo->store($user);
    }

    public function edit($request, $id)
    {
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
