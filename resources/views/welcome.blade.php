<!DOCTYPE html>
<html>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<title>Photo Master</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Raleway", sans-serif
    }

    ul {
        list-style-type: none;
        width: 300px;
        margin-left: 35%;
        padding: 0;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {

        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* Change the link color to #111 (black) on hover */
    li a:hover {
        background-color: #111;
    }
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left"
     style="z-index:3;width:300px;background-image: url('{{asset('image/background.jpg')}}') ;" id="mySidebar"><br>
    <div class="row">
        <div class="w3-container">
            <div class="col-md">
                <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey"
                   title="close menu">
                    <i class="fa fa-remove"></i>
                </a>
                <h4><a href="#">
                        <i class="fa fa-user">
                            <b>Sign In</b>
                        </i><br><br>
                    </a>
                </h4>
                <p class="ride-line">
                    <span>or</span>
                </p>
                <a href="#">
                    Sign in with Facebook
                </a>
            </div>
        </div>
    </div>
    <div class="w3-bar-block">
        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i
                class="fa fa-th-large fa-fw w3-margin-right"></i>Every photo</a>
        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i
                class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
     title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

    <!-- Header -->
    <header id="portfolio">

        <div class="w3-container">
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

    <!-- First Photo Grid-->
    <div class="w3-row-padding">

        @foreach($posts as $post)
            <a href="{{route('post',$post->slug)}}">
                <div class="w3-third w3-container w3-margin-bottom">
                    <img src="{{Storage::disk('local')->url($post->image)}}" alt="Norway"
                         style="width:100%; height: 200px"
                         class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>  {{$post->title}}</b></p>
                        <p> {{$post->subtitle}} </p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>


    <!-- Pagination -->

    <div class="w3-center w3-padding-32">
        <ul>
            <li href="#"
                class="w3-bar-item w3-button w3-hover-black">{{ $posts->links() }}</li>
        </ul>
    </div>
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
