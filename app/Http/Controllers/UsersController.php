<?php

namespace App\Http\Controllers;

use App\Contract\user\UsersServiceInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $userService;

    public function __construct(UsersServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {

//        if (!Gate::allows("crud-user")){
//            abort(403);
//        }
        $paginate =10;
        $users = $this->userService->all($paginate);
        return view('admin.User.list',compact('users'));
    }

    public function showFormCreate()
    {
        return view('admin.User.create');
    }

    public function store(Request $request)
    {
        if ($this->userService->create($request)) {
            $notification = $this->getToarstrNoti('success', 'create');
        } else {
            $notification = $this->getToarstrNoti('error', 'create');
        }

        return back()->with($notification);
    }

    public function getToarstrNoti($typeAlert, $action)
    {
        if ($typeAlert == "success") {
            return array([
                'message' =>  "The user have been $action",
                'alert-type' => "$typeAlert"
            ]);
        }
        return array([
            'message' =>  "Something wrong, try again!",
            'alert-type' => "$typeAlert"
        ]);
    }

    public function delete($id)
    {
        if ($this->userService->delete($id)) {
            $notification = $this->getToarstrNoti('success', 'delete');
        } else {
            $notification = $this->getToarstrNoti('error', 'delete');
        }

        return back()->with($notification);
    }
}
