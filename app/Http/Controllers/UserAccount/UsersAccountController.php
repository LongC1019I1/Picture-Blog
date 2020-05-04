<?php
namespace App\Http\Controllers\UserAccount;

use App\Http\Controllers\Controller;
use App\Http\Services\UserAccount\impl\UserAccountService;
use App\Http\Services\UsersService;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersAccountController extends Controller
{

    protected $userAccountSerivce;

    public function __construct(UserAccountService $userAccountSerivce)
    {

        $this->userAccountSerivce = $userAccountSerivce;
    }

    public function index()
    {
        $users = $this->userAccountSerivce->getAll();
                dd($users);
        return view('admin.User.list', compact('users'));
    }


    public function showUserAll(User $user)
    {

        $posts = $this->userAccountSerivce->findPostById();

        return view('useraccount.welcome', compact('posts'));

    }

    public function showUserPrivate(User $user)
    {


        $posts = $user::findOrFail(\Illuminate\Support\Facades\Auth::user()->id)->posts()->where('status', NULL)->get();

        return view('useraccount.welcome', compact('posts'));

    }

    public function showUserPublic(User $user)
    {


        $posts = $user::findOrFail(\Illuminate\Support\Facades\Auth::user()->id)->posts()->where('status', 1)->get();

        return view('useraccount.welcome', compact('posts'));

    }

    public function PostCreate()
    {

        $tags = tag::all();
        $categories = category::all();
        return view('useraccount.post.post', compact('tags', 'categories'));

    }

    public function PostEdit($id)
    {

        $post = post::with('tags', 'categories')->where('id', $id)->first();

        $tags = tag::all();
        $categories = category::all();
        return view('useraccount.post.edit', compact('tags', 'categories', 'post'));

    }

    public function ProfileEdit()
    {

        return view('useraccount.profile.edit');


    }

    public function ProfileUpdate(Request $request )
    {

        $user = User::find(Auth::user()->id);
        if ($request->hasFile('avatar'))
        {
           $avatar = $request->file('avatar');
           $avatar_name = date('d-m-Y_H:i:s'). '.' . $avatar->getClientOriginalName();
           $avatar->storeAs('public/images',$avatar_name);
        }
        else{
            $avatar_name = $user->avatar;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->avatar = $avatar_name;
        $user->job = $request->job;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $user->description = $request->description;
        $user->experience = $request->experience;
        $user->save();

        return redirect(route('PostAll'));

    }


///////////////////////////////////////// A TUNG
    public function showFormCreate()
    {
        return view('admin.User.create');
    }

    public function store(Request $request)
    {

        dd($request);
        if ($this->userService->create($request)) {
            $notification = $this->getToarstrNoti('success', 'create');
        } else {
            $notification = $this->getToarstrNoti('error', 'create');
        }
        return redirect()->route('signin.index');
    }


    public function Get(Request $request)
    {

        dd($request);

        if ($this->userService->create($request)) {
            $notification = $this->getToarstrNoti('success', 'create');
        } else {
            $notification = $this->getToarstrNoti('error', 'create');
        }
        return redirect()->route('signin.index');
//        return back()->with($notification);
    }
    public function getToarstrNoti($typeAlert, $action)
    {
        if ($typeAlert == "success") {
            return array([
                'message' => "The user have been $action",
                'alert-type' => "$typeAlert"
            ]);
        }
        return array([
            'message' => "Something wrong, try again!",
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


/////////////////////////////////////////

}
