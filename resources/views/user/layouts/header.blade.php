
{{--<header class="masthead" style="background-image: url(@yield('bg-img'))">--}}
{{--    <div class="overlay"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-8 col-md-10 mx-auto">--}}
{{--                <div class="site-heading">--}}
{{--                    <h1>@yield('title')</h1>--}}
{{--                    <span class="subheading">@yield('sub-heading')</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}


    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-12 search-form-wrap js-search-form">
                    <form method="get" action="#">
                        <input type="text" id="s" class="form-control" placeholder="Search...">
                        <button class="search-btn" type="submit"><span class="icon-search"></span></button>
                    </form>
                </div>

                <div class="col-4 site-logo">
                    <a href="http://127.0.0.1:8000" class="text-black h2 mb-0"><h1>Mini Blog</h1></a>
                </div>

                <div class="col-8 text-right">
                    <nav class="site-navigation" role="navigation">
                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                            <li><a href="http://127.0.0.1:8000">Home</a></li>
                            <li><a href="http://127.0.0.1:8000/post/category/chinh-tri">Politics</a></li>
                            <li><a href="http://127.0.0.1:8000/post/category/tin-tuc">News</a></li>
                            <li><a href="http://127.0.0.1:8000/post/category/giai-tri">Entertainment</a></li>
                            <li><a href="http://127.0.0.1:8000/post/category/show-biz">Showbiz </a></li>
                            <li><a href="http://127.0.0.1:8000/post/category/suc-khoe">Health</a></li>
                            <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
                        </ul>
                    </nav>
                    <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
            </div>

        </div>
    </header>
