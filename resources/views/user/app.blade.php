<!DOCTYPE html>
<html lang="en">

<head>

    @include('user.layouts.head')

</head>

<body>
<div class="site-wrap">
    <!-- Navigation -->
@include('user.layouts.header')
@section('main-content')
@show
<!-- Footer -->
    @include('user/layouts/footer')

</div>
</body>

</html>
