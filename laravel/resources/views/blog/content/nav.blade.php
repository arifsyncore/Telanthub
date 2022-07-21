<header class="primary">
    <div class="firstbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="brand">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('/assets/home/img/Logo.png') }}">
                        </a>
                    </div>					
                </div>
            </div>
        </div>
    </div>

    <nav class="menu">
        <div class="container">
            <div class="brand">
                <a href="#">
                    <img src="{{ asset('/assets/home/img/Logo.png') }}">
                </a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
            </div>
            <div id="menu-list">
                <ul class="nav-list">
                    <li class="for-tablet nav-title"><a>Menu</a></li>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>