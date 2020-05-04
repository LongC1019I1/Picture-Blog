<!doctype html>
<html lang="en">
@include('useraccount.layouts.head')
<body class="w3-light-grey w3-content" style="max-width:1600px">
@include('useraccount.layouts.slidebar')

<div class="w3-main" style="margin-left:300px">
    @include('useraccount.layouts.header')
@section('main-content')
@show
</div>
@include('useraccount.layouts.footer')
</body>
</html>
