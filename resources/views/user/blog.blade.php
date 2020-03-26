@extends('user.app')

@section('bg-img',asset('user/img/home-bg.jpg'));
@section('title','Long Blog');
@section('sub-heading','Learn and Grow');

@section('main-content')

    <!-- Main Content -->
    <div class="container">
        <div class="site-section bg-light">
            <div class="container">
                <div class="row align-items-stretch retro-layout-2">
                    <div class="col-md-4">
                        <a href="http://127.0.0.1:8000/post/ke-vo-on-con-dang-so-hon-ca-loai-lang-soi-neu-gap-5-loai-nguoi-nay-xung-quanh-hay-co-gang-tranh-xa" class="h-entry mb-30 v-height gradient" style="background-image: url('{{asset('blog/images/img_1.jpg')}}');">

                            <div class="text">
                                <h2>Kẻ vô ơn còn đáng sợ hơn cả loài lang sói: Nếu gặp 5 loại người này xung quanh, hãy cố gắng tránh xa!</h2>
                                <span class="date">July 19, 2019</span>
                            </div>
                        </a>
                        <a href="http://127.0.0.1:8000/post/10-mv-duoc-xem-nhieu-nhat-tuan" class="h-entry v-height gradient" style="background-image: url({{asset('blog/images/img_2.jpg')}})">

                            <div class="text">
                                <h2>10 MV được xem nhiều nhất tuần: Siêu hit 7 năm trước bỗng vươn lên vượt cả BTS, BLACKPINK; vị trí dẫn đầu vẫn thuộc về ITZY</h2>
                                <span class="date">July 19, 2019</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="http://127.0.0.1:8000/post/the-gioi-thay-doi-tung-giay" class="h-entry img-5 h-100 gradient" style="background-image: url({{asset('blog/images/img_v_1.jpg')}})">

                            <div class="text">
                                <div class="post-categories mb-3">
                                    <span class="post-category bg-danger">Travel</span>
                                    <span class="post-category bg-primary">Food</span>
                                </div>
                                <h2>LUẬN Thế giới thay đổi từng giây, chỉ có sức mạnh "đổi trắng thay đen" của photoshop là bất biến</h2>
                                <span class="date">July 19, 2019</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="single.html" class="h-entry mb-30 v-height gradient" style="background-image: url({{asset('blog/images/hero_1.jpg')}})">

                            <div class="text">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span class="date">July 19, 2019</span>
                            </div>
                        </a>
                        <a href="single.html" class="h-entry v-height gradient" style="background-image: url('{{asset('blog/images/img_4.jpg')}}');">

                            <div class="text">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span class="date">July 19, 2019</span>
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
                            <a href="{{route('post',$post->slug)}}"><img src="{{Storage::disk('local')->url($post->image)}}" alt="Image" class="img-fluid rounded"></a>
                            <div class="excerpt">
                                <span class="post-category text-white bg-secondary mb-3">Politics</span>

                                <h2><a href="{{route('post',$post->slug)}}">{{$post->title}}</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <figure class="author-figure mb-0 mr-3 float-left"><img src="{{asset('blog/images/person_1.jpg')}}" alt="Image" class="img-fluid"></figure>
{{--                                    <span class="d-inline-block mt-1">By <a href="#">{{$post->subtitle}}</a></span>--}}
                                    <span>&nbsp;-&nbsp; July 19, 2019</span>
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
                            <a href="{{route('post',$post->slug)}}" class="hentry v-height img-2 gradient" style="background-image: url('{{Storage::disk('local')->url($post->image)}}');">
                                <span class="post-category text-white bg-primary">Sports</span>
                                <div class="text text-sm">
                                    <h2>{{$post->title}}</h2>
                                    <span>{{$post->created_at}}</span>
                                </div>
                            </a>
                            <a href="{{route('post',$post->slug)}}" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('{{Storage::disk('local')->url($post->image)}}');">

                                <span class="post-category text-white bg-warning">Lifestyle</span>
                                <div class="text text-sm">
                                    <h2>{{$post->title}}</h2>
                                    <span>{{$post->created_at}}</span>
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
    </div>

    <hr>
    @endsection
