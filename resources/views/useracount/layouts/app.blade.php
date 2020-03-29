<!doctype html>
<html lang="en">
@include('useracount.layouts.head')
<body class="w3-light-grey w3-content" style="max-width:1600px">
@include('useracount.layouts.slidebar')

<div class="w3-main" style="margin-left:300px">
    @include('useracount.layouts.header')
@section('main-content')
@show
</div>
@include('useracount.layouts.footer')
</body>
</html>
