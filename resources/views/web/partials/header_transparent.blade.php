<header class="main-header position-absolute w-100" style="z-index: 2000">
    <nav class="navbar navbar-expand-xl navbar-dark sticky-header">

        <div class="container d-flex align-items-center justify-content-lg-between position-relative">
            <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="{{asset('meta/img/logo-light.png')}}" alt="logo" class="img-fluid logo-white" width="160px" />
                <img src="{{asset('meta/img/logo-black.png')}}" alt="logo" class="img-fluid logo-color" width="160px"/>
            </a>

            <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('home')}}"  aria-expanded="false">
                            Welcome
                        </a>
                    </li>
                    <li><a href="{{route('about')}}" class="nav-link">About Us</a></li>
                    <li><a href="{{route('show.plan')}}" class="nav-link">Investment Plans</a></li>
                    <li><a href="{{route('team')}}" class="nav-link">Our Team</a></li>
                    <li><a href="{{route('partners')}}" class="nav-link">Partners</a></li>
                    <li><a href="{{route('faq')}}" class="nav-link">Support</a></li>
                    <li><a href="{{route('blog')}}" class="nav-link">News & Research</a></li>

                </ul>
            </div>
            @auth
            <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                <a href="{{route('user.home')}}" class="btn btn-primary"><i class="far fa-wallet"></i> Go to Dashboard</a>
            </div>
            @endauth
            @guest
            <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                <a href="{{route('login')}}" class="btn btn-link text-decoration-none me-2">Sign In</a>
                <a href="{{route('register')}}" class="btn btn-primary">Join as Investor</a>
            </div>
            @endguest
        </div>
            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end navbar-light text-dark" tabindex="-1" id="offcanvasWithBackdrop" style="background: #077d37;">
                <div class="offcanvas-header d-flex align-items-center mt-4 ">
                    <a href="{{url('/')}}" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{asset('meta/img/logo-black.png')}}" alt="logo" class="img-fluid ps-2" width="160px"/>
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="far fa-close"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('home')}}"  aria-expanded="false">
                                Welcome
                            </a>
                        </li>
                        <li><a href="{{route('about')}}" class="nav-link">About Us</a></li>
                        <li><a href="{{route('show.plan')}}" class="nav-link">Investment Plans</a></li>
                        <li><a href="{{route('team')}}" class="nav-link">Our Team</a></li>
                        <li><a href="{{route('home')}}" class="nav-link">Partners</a></li>
                        <li><a href="{{route('faq')}}" class="nav-link">Support</a></li>
                        <li><a href="{{route('blog')}}" class="nav-link">News & Research</a></li>
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        @auth

                            <a href="{{route('user.home')}}" class="btn btn-primary"><i class="far fa-wallet"></i> Go to Dashboard</a>

                        @endauth
                        @guest

                            <a href="{{route('login')}}" class="btn btn-link text-decoration-none me-2">Sign In</a>
                            <a href="{{route('register')}}" class="btn btn-primary">Join as Investor</a>

                        @endguest
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </div>
    </nav>
</header>
