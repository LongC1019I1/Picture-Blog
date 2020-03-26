<?php

namespace App\Http\Controllers;

use App\Contract\user\UsersServiceInterface;
use App\Model\user\User;
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

    public function showUserAll( User $user){


        $posts = $user::findOrFail(\Illuminate\Support\Facades\Auth::user()->id)->posts()->get();

        return view('userlist.welcome', compact('posts'));

    }

    public function showUserPrivate( User $user){


        $posts = $user::findOrFail(\Illuminate\Support\Facades\Auth::user()->id)->posts()->where('status',NULL)->get();

        return view('userlist.welcome', compact('posts'));

    }

    public function showUserPublic( User $user){


        $posts = $user::findOrFail(\Illuminate\Support\Facades\Auth::user()->id)->posts()->where('status',1)->get();

        return view('userlist.welcome', compact('posts'));

    }


}
