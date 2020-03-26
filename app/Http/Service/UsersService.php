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
        //lay doi tuong file tu input "image"
        $file = $request->file('avatar');
        //luu ten khac cho anh can luu
        $fileName = $user->name.'.'.$file->getClientOriginalExtension();
        //luu anh vao duong dan storage/pulic/images -- luon luon luu vao storage nen ko can phai ghi.
        // cau truc public/path --path la duong dan de luu.
        $file->storeAs('public/images', $fileName);
        $user->avatar = $fileName;

        $user->role = $request->role;




        $this->userRepo->store($user);
    }

    public function getById($id)
    {
        return $this->userRepo->getById($id);
    }

    public function edit($request, $id)
    {
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        $user = $this->userRepo->getById($id);
        $this->userRepo->delete($user);    }
}
