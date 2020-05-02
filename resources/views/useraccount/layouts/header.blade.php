
    <header class="site-navbar" role="banner">
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


<header id="portfolio">



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
