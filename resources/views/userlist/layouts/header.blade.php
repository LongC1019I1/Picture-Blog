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
