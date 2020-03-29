@extends('user.app')


@section('bg-img',Storage::disk('local')->url($post->image))
@section('headSection')
    <link rel="stylesheet" href="{{asset(('user/css/prism.css'))}}">
@endsection
@section('title', $post->title)
@section('sub-heading',$post->subtitle)

@section('main-content')



    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image:  url('{{Storage::disk('local')->url($post->image)}}'); height: 600px">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <span class="post-category text-white bg-success mb-3">Nature</span>
                        <h1 class="mb-4"><a href="#">{{$post->title}}</a></h1>
                        <div class="post-meta align-items-center text-center">
                            {{--                            <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>--}}
                            {{--                            <span class="d-inline-block mt-1">By Carrol Atkinson</span>--}}
                            {{--                            <span>&nbsp;-&nbsp; February 10, 2019</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="site-section py-lg">
        <div class="container">

            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=784352975425654&autoLogAppEvents=1"></script>

            <article>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <small>Created at {{ $post->created_at }}</small>
                            @foreach ($post->categories as $category)
                                <small class="pull-right" style="margin-right: 20px">
                                    <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                                </small>
                            @endforeach
                            {!! htmlspecialchars_decode($post->body) !!}


                            <h3>Tag Clouds</h3>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('tag',$tag->slug) }}"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">
                                        {{ $tag->name }}
                                    </small></a>
                            @endforeach
                        </div>

                        <div class="col-md-12 col-lg-4 sidebar">
                            <div class="sidebar-box search-form-wrap">
                                <form action="#" class="search-form">
                                    <div class="form-group">
                                        <span class="icon fa fa-search"></span>
                                        <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                                    </div>
                                </form>
                            </div>
                            <!-- END sidebar-box -->
                            <div class="sidebar-box">
                                <div class="bio text-center">
                                    <img src="{{asset('storage/images/'.$user[0]->avatar)}}" alt="Image Placeholder" class="img-fluid mb-5">
                                    <div class="bio-body">
                                        <h2>{{$user[0]->name}}</h2>
                                        <p class="mb-4">
                                            <?php

                                          echo  substr($user[0]->description,0,250). '...'

                                            ?>

                                        </p>
                                        <p><a href="{{route('user.detail',$user[0]->id)}}" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                                        <p class="social">
                                            <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                            <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END sidebar-box -->
                            <div class="sidebar-box">
                                <h3 class="heading">Popular Posts</h3>
{{--                                <div class="post-entry-sidebar">--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <a href="">--}}
{{--                                                <img src="images/img_1.jpg" alt="Image placeholder" class="mr-4">--}}
{{--                                                <div class="text">--}}
{{--                                                    <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>--}}
{{--                                                    <div class="post-meta">--}}
{{--                                                        <span class="mr-2">March 15, 2018 </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="">--}}
{{--                                                <img src="images/img_2.jpg" alt="Image placeholder" class="mr-4">--}}
{{--                                                <div class="text">--}}
{{--                                                    <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>--}}
{{--                                                    <div class="post-meta">--}}
{{--                                                        <span class="mr-2">March 15, 2018 </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="">--}}
{{--                                                <img src="images/img_3.jpg" alt="Image placeholder" class="mr-4">--}}
{{--                                                <div class="text">--}}
{{--                                                    <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>--}}
{{--                                                    <div class="post-meta">--}}
{{--                                                        <span class="mr-2">March 15, 2018 </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                            <!-- END sidebar-box -->

                            <div class="sidebar-box">
                                <h3 class="heading">Categories</h3>
                                <ul class="categories">
                                    <li><a href="http://127.0.0.1:8000/post/category/chinh-tri">Politics</a></li>
                                    <li><a href="http://127.0.0.1:8000/post/category/tin-tuc">News</a></li>
                                    <li><a href="http://127.0.0.1:8000/post/category/giai-tri">Entertainment</a></li>
                                    <li><a href="http://127.0.0.1:8000/post/category/show-biz"> Showbiz</a></li>
                                    <li><a href="http://127.0.0.1:8000/post/category/suc-khoe">Health</a></li>
                                </ul>
                            </div>
                            <!-- END sidebar-box -->

                            <div class="sidebar-box">
                                <h3 class="heading">Tags</h3>
                                <ul class="tags">



                                    @foreach($post->tags as $tag)
                                    <li><a href="{{route('tag',$tag->slug)}}"> {{$tag->name}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
                        {{--                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>--}}
                    </div>

                </div>
            </article>
        </div>

    </section>

    <div class="site-section bg-light">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12">
                    <h2>More Related Posts</h2>
                </div>
            </div>

            <div class="row align-items-stretch retro-layout">

                <div class="col-md-5 order-md-2">
                    <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/img_4.jpg');">
                        <span class="post-category text-white bg-danger">Travel</span>
                        <div class="text">
                            <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                            <span>February 12, 2019</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-7">

                    <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/img_1.jpg');">
                        <span class="post-category text-white bg-success">Nature</span>
                        <div class="text text-sm">
                            <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                            <span>February 12, 2019</span>
                        </div>
                    </a>

                    <div class="two-col d-block d-md-flex">
                        <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/img_2.jpg');">
                            <span class="post-category text-white bg-primary">Sports</span>
                            <div class="text text-sm">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span>February 12, 2019</span>
                            </div>
                        </a>
                        <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg');">
                            <span class="post-category text-white bg-warning">Lifestyle</span>
                            <div class="text text-sm">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span>February 12, 2019</span>
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
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
                        <form action="#" class="d-flex">
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('footerSection')
    <script  src="{{asset('user/js/prism.js')}}"></script>
@endsection
