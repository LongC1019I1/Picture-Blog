<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('storage/images/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}" class="img-circle" alt="User Image">
            </div>
            @auth
                <div class="pull-left info">
                    <span class="username">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            @endauth
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">

                    <li class=""><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i> Posts </a></li>
                    <li class=""><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> Categories </a></li>
                    <li class=""><a href="{{route('tag.index')}}"><i class="fa fa-circle-o"></i> Tags </a></li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-user"></i>
                    <span>User</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
{{--                    <li><a class="" href="{{asset('admin.user.index')}}">List</a></li>--}}
                    <li><a class="" href="{{route('admin.User.create')}}">Create</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
