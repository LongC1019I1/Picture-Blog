

@extends('userlist.layouts.app')
@section('main-content')
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

    <!-- Header -->
    <header id="portfolio">

        {{--        <div class="w3-container">--}}
        {{--            <div class="w3-section w3-bottombar w3-padding-16">--}}
        {{--                <span class="w3-margin-right">Filter:</span>--}}
        {{--                <button class="w3-button w3-black">ALL</button>--}}
        {{--                <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>--}}
        {{--                <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos--}}
        {{--                </button>--}}
        {{--                <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art--}}
        {{--                </button>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        <div class="w3-container">
            <div class="w3-section w3-bottombar w3-padding-16">
                <span class="w3-margin-right">Filter:</span>
                <a href="{{route('PostAll')}}">
                    <button class="w3-button w3-black">All</button>
                </a>
                <a href="{{route('PostPublic')}}">
                    <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Public</button>
                </a>
                <a href="{{route('PostPrivate')}}">
                    <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Private</button>
                </a>
                <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos
                </button>
                <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art
                </button>
            </div>
        </div>
    </header>

    <!-- First Photo Grid-->
    <div class="w3-row-padding">

        @foreach($posts as $post)

            <div class="w3-third w3-container w3-margin-bottom">
                <a href="{{route('post',$post->slug)}}">
                    <img src="{{Storage::disk('local')->url($post->image)}}" alt="Norway"
                         style="width:100%; height: 200px"
                         class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>  {{$post->title}}</b></p>
                </a>
                <p> {{$post->subtitle}} </p>


                <a href=" {{route('post.edit',$post->id)}}">Edit</a>
                <a href="" onclick="
                    if(confirm('Are you sure, You Want to delete this?'))
                    {
                    event.preventDefault();
                    document.getElementById('delete-form-{{ $post->id }}').submit();
                    }
                    else{
                    event.preventDefault();
                    }"><span class="glyphicon glyphicon-trash">Delete</span></a>
            </div>
    </div>

    <table>
        <tr>
            <td><a href="{{ route('post.edit',$post->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
                <a href="" onclick="
                    if(confirm('Are you sure, You Want to delete this?'))
                    {
                    event.preventDefault();
                    document.getElementById('delete-form-{{ $post->id }}').submit();
                    }
                    else{
                    event.preventDefault();
                    }"><span class="glyphicon glyphicon-trash"></span></a>
            </td>


            <td>
                <form id="delete-form-{{ $post->id }}" method="post" action="{{ route('post.destroy',$post->id) }}"
                      style="display: none">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
                <a href="" onclick="
                    if(confirm('Are you sure, You Want to delete this?'))
                    {
                    event.preventDefault();
                    document.getElementById('delete-form-{{ $post->id }}').submit();
                    }
                    else{
                    event.preventDefault();
                    }"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
    </table>
    @endforeach

</div>


<!-- Pagination -->

<div class="w3-center w3-padding-32">
    <ul>
        <li href="#"{{--                 class="w3-bar-item w3-button w3-hover-black">{{ $posts->links() }}</li>--}}>

    </ul>
</div>



@endsection
