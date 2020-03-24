@extends('user.app')


{{--@section('bg-img',Storage::disk('local')->url($post->image));--}}
@section('headSection')
    <link rel="stylesheet" href="{{asset(('user/css/prism.css'))}}">
@endsection
{{--@section('title', $post->title);--}}
{{--@section('sub-heading',$post->subtitle);--}}

@section('main-content')


    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Category</span>
                    <h3>Sports</h3>
                    <p>Category description here.. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam error eius quo, officiis non maxime quos reiciendis perferendis doloremque maiores!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-white">
        <div class="container">
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








@endsection

@section('footerSection')
    <script  src="{{asset('user/js/prism.js')}}"></script>
@endsection
