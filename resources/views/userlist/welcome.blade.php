@extends('userlist.layouts.app')
@section('headSection')
    <style>
        #aboutme { padding-right: 400px; float: left; }


    </style>
    @endsection
@section('main-content')
    <!-- !PAGE CONTENT! -->


    <!-- Header -->


    <!-- First Photo Grid-->
    <div class="w3-row-padding">

        @foreach($posts as $post)

            <div class="w3-third w3-container w3-margin-bottom">
                <a href="{{route('post',$post->slug)}}">
                    <img  src="{{Storage::disk('local')->url($post->image)}}" alt="Norway"
                         style="width:100%; height: 250px"
                         class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>  {{$post->title}}</b></p>
                </a>
                <p> {{$post->subtitle}} </p>


                <a href=" {{route('PostEdit',$post->id)}}">Edit</a>
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




    <!-- Pagination -->

    <div class="w3-center w3-padding-32">
        {{--    <ul>--}}
        {{--        <li href="#"--}}{{--                 class="w3-bar-item w3-button w3-hover-black">{{ $posts->links() }}</li>--}}{{-->--}}

        {{--    </ul>--}}
    </div>
    <div class="w3-row-padding w3-padding-16" id="about">
    <!-- Images of Me -->
    <h4 style="margin-left: 18px; margin-top: 20px"><b>About Me</b></h4>
    <hr>


        <div class="w3-col m6">
            <table style="width: 1600px">
                <td width="350px"> <img style="height: 300px"
                          src="{{asset('storage/images/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}" alt="Me"
                          style="width:100%"></td>
                <td id="aboutme">

                    <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>{{\Illuminate\Support\Facades\Auth::user()->job}}</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{\Illuminate\Support\Facades\Auth::user()->address}}</p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>{{\Illuminate\Support\Facades\Auth::user()->phone}}</p>
                    <p>{{\Illuminate\Support\Facades\Auth::user()->description}}</p>

                </td>
            </table>

        </div>

    </div>

    <div class="w3-container w3-padding-large" style="margin-bottom:32px">


 <br>


        {!! htmlspecialchars_decode(\Illuminate\Support\Facades\Auth::user()->experience) !!}

    </div>


    <!-- Contact Section -->
    <div class="w3-container w3-padding-large w3-grey">
        <h4 id="contact"><b>Contact Me</b></h4>
        <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
            <div style="padding-top: 10px"class="w3-third w3-dark-grey">
                <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                <p>{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
            </div>
            <div style="padding-top: 10px" class="w3-third w3-teal">
                <p ><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
                <p>{{\Illuminate\Support\Facades\Auth::user()->address}}</p>
            </div>
            <div style="padding-top: 10px" class="w3-third w3-dark-grey">
                <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                <p>{{\Illuminate\Support\Facades\Auth::user()->phone}}</p>
            </div>
        </div>
        <hr class="w3-opacity">
        <form action="/action_page.php" target="_blank">
            <div class="w3-section">
                <label>Name</label>
                <input class="w3-input w3-border" type="text" name="Name" required>
            </div>
            <div class="w3-section">
                <label>Email</label>
                <input class="w3-input w3-border" type="text" name="Email" required>
            </div>
            <div class="w3-section">
                <label>Message</label>
                <input class="w3-input w3-border" type="text" name="Message" required>
            </div>
            <button type="submit" class="w3-button w3-black w3-margin-bottom"><i
                    class="fa fa-paper-plane w3-margin-right"></i>Send Message
            </button>
        </form>

@endsection
