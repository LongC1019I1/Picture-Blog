<!doctype html>
<html lang="en">
@include('userlist.layouts.head')
<body class="w3-light-grey w3-content" style="max-width:1600px">
@include('userlist.layouts.slidebar')

<div class="w3-main" style="margin-left:300px">
    @include('userlist.layouts.header')
@section('main-content')
@show
</div>
@include('userlist.layouts.footer')
</body>
</html>
