@if(count($errors)> 0)layouts

    @foreach($errors->all() as $error )
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach
@endif
