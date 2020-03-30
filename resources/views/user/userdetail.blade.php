<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('blog/fonts/icomoon/style.css')}}">
<link rel="stylesheet" href="{{asset('blog/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('blog/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('blog/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('blog/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('blog/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('blog/css/bootstrap-datepicker.css')}}">
<link rel="stylesheet" href="{{asset('blog/fonts/flaticon/font/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('blog/css/aos.css')}}">

<link rel="stylesheet" href="{{asset('blog/css/style.css')}}">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    #fix ul li {
        float: left;
    }
</style>


<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey"
           title="close menu">
            <i class="fa fa-remove"></i>
        </a>
        <img src="{{asset('storage/images/'.$user->avatar)}}" style="width:45%;" class="w3-round"><br><br>
        <h4><b>{{$user->name}}</b></h4>
        <p class="w3-text-grey">
            <?php
            echo substr($user->description, 0, 80) . '...'
            ?>

        </p>
    </div>
    <div class="w3-bar-block">
        <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
                class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    </div>
    <div class="w3-panel w3-large">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
     title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->

<div class="w3-main" style="margin-left:300px">

    <header class="site-navbar" role="banner" >
        <div class="container-fluid">
            <div class="row align-items-center">




                <div class="row align-items-center">
                    <div id="fix" class="col-8 text-right">
                        <nav class="site-navigation" role="navigation">
                            <ul style="width: 1000px" class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                                <li><a href="{{route('index')}}">Trang chủ</a></li>
                                <li><a href="{{route('category','chinh-tri')}}">Chính trị</a></li>
                                <li><a href="{{route('category','lich-su')}}">Lịch sử</a></li>
                                <li><a href="{{route('category','doi-song')}}">Đời sống</a></li>
                                <li><a href="{{route('category','suc-khoe')}}">Sức khỏe</a></li>
                                <li><a href="{{route('category','tin-tuc')}}">Tin tức</a></li>
                                <li><a href="{{route('category','giai-tri')}}">Giải trí</a></li>
                                <li><a href="{{route('category','du-lich')}}">Du lịch</a></li>
                                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
                            </ul>
                        </nav>
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a>
                    </div>
                </div>


    </header>
    <!-- Header -->
    <header id="portfolio">
        <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;"
                         class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
                class="fa fa-bars"></i></span>
        <div class="w3-container">
            <h1><b>My Portfolio</b></h1>
            <div class="w3-section w3-bottombar w3-padding-16">
                <span class="w3-margin-right">Filter:</span>
                <button class="w3-button w3-black">ALL</button>
                <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
                <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos
                </button>
                <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art
                </button>
            </div>
        </div>
    </header>
    <!-- !PAGE CONTENT! -->


    <!-- Header -->


    <!-- First Photo Grid-->
    <div class="w3-row-padding">

        @foreach($posts as $post)

            <div class="w3-third w3-container w3-margin-bottom">
                <a href="{{route('post',$post->slug)}}">
                    <img src="{{Storage::disk('local')->url($post->image)}}" alt="Norway"
                         style="width:100%; height: 250px"
                         class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>  {{$post->title}}</b></p>
                </a>
                <p> {{$post->subtitle}} </p>

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


    <hr>

<!-- Pagination -->

    <div class="w3-center w3-padding-32">
        {{--    <ul>--}}
        {{--        <li href="#"--}}{{--                 class="w3-bar-item w3-button w3-hover-black">{{ $posts->links() }}</li>--}}{{-->--}}

        {{--    </ul>--}}
    </div>

    <div class="w3-row-padding w3-padding-16">
        <!-- Images of Me -->
        <h4 id="about" style="margin-left: 18px; margin-top: 20px"><b>About Me</b></h4>
        <hr>


        <div class="w3-col m6">
            <table style="width: 1600px">
                <tr>
                    <td width="350px" style="padding-bottom: 20px"><img style="height: 300px"
                                                                        src="{{asset('storage/images/'.$user->avatar)}}"
                                                                        alt="Me"
                                                                        style="width:100%"></td>

                    <td id="aboutme">

                        <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->name}}</p>
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->job}}</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->address}}</p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->email}}
                        </p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$user->phone}}</p>
                        <p style="width: 900px">{{$user->description}}</p>

                    </td>
                </tr>

            </table>
            <br>


        </div>
        {{--        <i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal">--}}

    </div>

    <div class="w3-container w3-padding-large" style="margin-bottom:32px">


        <br>


        {!! htmlspecialchars_decode($user->experience) !!}

    </div>


    <!-- Contact Section -->
    <div class="w3-container w3-padding-large w3-grey">
        <h4 id="contact"><b>Contact Me</b></h4>
        <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
            <div style="padding-top: 10px; height: 100px" class="w3-third w3-dark-grey">
                <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                <p>{{$user->email}}</p>
            </div>
            <div style="padding-top: 10px;height: 100px" class="w3-third w3-teal">
                <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
                <p>{{$user->address}}</p>
            </div>
            <div style="padding-top: 10px; height: 100px" class="w3-third w3-dark-grey">
                <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                <p>{{$user->phone}}</p>
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
    </div>
    <footer class="w3-container w3-padding-32 w3-dark-grey">
        <div class="w3-row-padding">
            <div class="w3-third">
                <h3>FOOTER</h3>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
                    congue gravida diam non fringilla.</p>
                <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
            </div>

            <div class="w3-third">
                <h3>BLOG POSTS</h3>
                <ul class="w3-ul w3-hoverable">
                    <li class="w3-padding-16">
                        <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Lorem</span><br>
                        <span>Sed mattis nunc</span>
                    </li>
                    <li class="w3-padding-16">
                        <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Ipsum</span><br>
                        <span>Praes tinci sed</span>
                    </li>
                </ul>
            </div>

            <div class="w3-third">
                <h3>POPULAR TAGS</h3>
                <p>
                    <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span
                        class="w3-tag w3-grey w3-small w3-margin-bottom">New York</span> <span
                        class="w3-tag w3-grey w3-small w3-margin-bottom">London</span>
                    <span class="w3-tag w3-grey w3-small w3-margin-bottom">IKEA</span> <span
                        class="w3-tag w3-grey w3-small w3-margin-bottom">NORWAY</span> <span
                        class="w3-tag w3-grey w3-small w3-margin-bottom">DIY</span>
                    <span class="w3-tag w3-grey w3-small w3-margin-bottom">Ideas</span> <span
                        class="w3-tag w3-grey w3-small w3-margin-bottom">Baby</span> <span
                        class="w3-tag w3-grey w3-small w3-margin-bottom">Family</span>
                    <span class="w3-tag w3-grey w3-small w3-margin-bottom">News</span> <span
                        class="w3-tag w3-grey w3-small w3-margin-bottom">Clothing</span> <span
                        class="w3-tag w3-grey w3-small w3-margin-bottom">Shopping</span>
                    <span class="w3-tag w3-grey w3-small w3-margin-bottom">Sports</span> <span
                        class="w3-tag w3-grey w3-small w3-margin-bottom">Games</span>
                </p>
            </div>

        </div>
    </footer>
    <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp"
                                                                title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a>
    </div>

    <!-- End page content -->

</div>


<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>

</body>
</html>
