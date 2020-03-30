@extends('user.app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Long Blog')
@section('sub-heading','Learn and Grow')

@section('main-content')
    @if( !isset( \Illuminate\Support\Facades\Auth::user()->avatar) )
    @else
        <a href="{{route('PostAll')}}">
        <div  style="float: left " class="navbar-custom-menu" >
            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <div class="dropdown user user-menu" style="margin-top: 15px">

                        <img style=" margin-left:58px; width: 120px" src="{{asset('storage/images/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                             class="user-image" alt="User Image">
                        <br>
                        <small style="margin-left: 80px">{{\Illuminate\Support\Facades\Auth::user()->name}} </small>
                        <span class="hidden-xs"></span>


                </div>
            </ul>
        </div>
</a>
    @endif

    <!-- Main Content -->
    <div class="container">
        <div class="site-section bg-light">


            <div class="container">
                <div class="row align-items-stretch retro-layout-2">
                    <div class="col-md-4">
                        <a href="{{route('post',$postChinhtri->slug)}}"
                           class="h-entry mb-30 v-height gradient"
                           style="background-image:  url('{{Storage::disk('local')->url($postChinhtri->image)}}');">

                            <div class="text">
                                <h2>{{$postChinhtri->title}}</h2>
                                <span class="date">{{$postChinhtri->created_at}}</span>
                            </div>
                        </a>
                        <a href="{{route('post',$postLichsu->slug)}}"
                           class="h-entry v-height gradient"
                           style="background-image: url({{Storage::disk('local')->url($postLichsu->image)}})">

                            <div class="text">
                                <h2>{{$postLichsu->title}}</h2>
                                <span class="date">{{$postLichsu->created_at}}</span>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4">
                        <a href="{{route('post',$postDoisong->slug)}}"
                           class="h-entry img-5 h-100 gradient"
                           style="background-image: url('{{Storage::disk('local')->url($postDoisong->image)}}')">

                            <div class="text">
                                <div class="post-categories mb-3">
                                    <span class="post-category bg-danger">{{$postDoisong->name}}</span>
{{--                                    <span class="post-category bg-primary">Food</span>--}}
                                </div>
                                <h2>{{($postDoisong->title)}}</h2>
                                <span class="date">{{$postLichsu->created_at}}</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('post',$postTintuc->slug)}}" class="h-entry mb-30 v-height gradient"
                           style="background-image: url({{Storage::disk('local')->url($postTintuc->image)}})">

                            <div class="text">
                                <h2>{{$postTintuc->title}}</h2>
                                <span class="date">{{$postTintuc->created_at}}</span>
                            </div>
                        </a>
                        <a href="{{route('post',$postSuckhoe->slug)}}" class="h-entry v-height gradient"
                           style="background-image: url({{Storage::disk('local')->url($postSuckhoe->image)}}">

                            <div class="text">
                                <h2>{{$postSuckhoe->title}}</h2>
                                <span class="date">{{$postSuckhoe->created_at}}</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2>Recent Posts</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-lg-4 mb-4">
                            <div class="entry2">
                                <a href="{{route('post',$post->slug)}}"><img style="height: 240px"
                                        src="{{Storage::disk('local')->url($post->image)}}" alt="Image"
                                        class="img-fluid rounded"></a>
                                <div class="excerpt">

                                    <?php
                                    $user = DB::table('users')->where('id', $post->user_id)->get()
                                    ?>
                                    <span class="post-category text-white bg-secondary mb-3">{{$post->categories()->first()->name}}</span>

                                    <h2><a href="{{route('post',$post->slug)}}">{{$post->title}}</a></h2>
                                    <div class="post-meta align-items-center text-left clearfix">
                                        <figure class="author-figure mb-0 mr-3 float-left"><img style="width:50px; height: 50px"
                                                src="{{asset('storage/images/'.$user[0]->avatar)}}" alt="Image"
                                                class="img-fluid"></figure>
                                        {{--                                    <span class="d-inline-block mt-1">By <a href="#">{{$post->subtitle}}</a></span>--}}
                                        <span style="padding-top: 20px;"><br>
                                            &nbsp;{{$user[0]->name}}</span>
                                    </div>

                                    <p>{{$post->subtitle}}</p>
                                    <p><a href="{{route('post',$post->slug)}}">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row text-center pt-5 border-top">
                    <div class="col-md-12">
                        <div class="custom-pagination">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">

                <div class="row align-items-stretch retro-layout">

                    <div class="col-md-5 order-md-2">
                        <a href="{{route('post',$postChinhtri->slug)}}" class="hentry img-1 h-100 gradient"
                           style="background-image: url('{{Storage::disk('local')->url($postChinhtri->image)}}');">
                            <span class="post-category text-white bg-success">{{$postChinhtri->name}}</span>
                            <div class="text">
                                <h2>{{$postChinhtri->title}}</h2>
                                <span>{{$postChinhtri->created_at}}</span>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-7">

                        <a href="{{route('post',$postLichsu->slug)}}" class="hentry img-2 v-height mb30 gradient"
                           style="background-image: url('{{Storage::disk('local')->url($postLichsu->image)}}');">
                            <span class="post-category text-white bg-success">{{$postLichsu->name}}</span>
                            <div class="text text-sm">
                                <h2>{{$postLichsu->title}}</h2>
                                <span>{{$postLichsu->created_at}}</span>
                            </div>
                        </a>

                        <div class="two-col d-block d-md-flex">
                            <a href="{{route('post',$postDulich->slug)}}" class="hentry v-height img-2 gradient"
                               style="background-image: url('{{Storage::disk('local')->url($postDulich->image)}}');">
                                <span class="post-category text-white bg-primary">{{$postDulich->name}}</span>
                                <div class="text text-sm">
                                    <h2>{{$postDulich->title}}</h2>
                                    <span>{{$postDulich->created_at}}</span>
                                </div>
                            </a>
                            <a href="{{route('post',$postGiaitri->slug)}}" class="hentry v-height img-2 ml-auto gradient"
                               style="background-image: url('{{Storage::disk('local')->url($postGiaitri->image)}}');">

                                <span class="post-category text-white bg-warning">{{$postGiaitri->name}}</span>
                                <div class="text text-sm">
                                    <h2>{{$postGiaitri->title}}</h2>
                                    <span>{{$postGiaitri->created_at}}</span>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="site-section bg-lightx">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-5">
                        <div class="subscribe-1 ">
                            <h2>Subscribe to our newsletter</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error
                                illum a explicabo, ipsam nostrum.</p>
                            <form action="#" class="d-flex">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection
