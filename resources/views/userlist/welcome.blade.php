
@extends('userlist.layouts.app')
@section('main-content')
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

    <!-- Header -->


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

</div>


<!-- Pagination -->

<div class="w3-center w3-padding-32">
{{--    <ul>--}}
{{--        <li href="#"--}}{{--                 class="w3-bar-item w3-button w3-hover-black">{{ $posts->links() }}</li>--}}{{-->--}}

{{--    </ul>--}}
</div>



@endsection
