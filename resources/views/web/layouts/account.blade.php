<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    
    @include('partials.seo')

    <!--title-->
    <title>{{$title ?? 'Bossman -Agriculture Investment Platform'}}</title>

    <!--title-->
    <title>{{$title ?? 'Login to Investor Account'}}</title>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>

    @include('frontend.partials.style')
     @stack('style-lib')

     @stack('style')
    <style>
        .img-r {
            border-radius: 20px;
        }
        .table > thead {
    vertical-align: bottom;
    background: #71ed8569;
}

        .bg-dark {
            background-color: #077f28 !important;
        }
        .card-text{
            font-size: 15px !important;
        }

        .crypto-team-social li a {
            color: #000000;
            font-weight: 800;
        }

        .navbar-dark .main-menu li a.nav-link {
            color: #ffffff;
        }

        .footer-single-col h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 36px;
            color: #0cd444;
        }
        .btn-primary:hover {
    color: var(--bs-white);
    background-color: #fad506;
    border-color: #fad506;
    /* -webkit-box-shadow: none; */
    /* box-shadow: none; */
}.code-s{

    font-size: 24px !important;
    display: block;
    font-weight: 700 !important;
    width: 100%;
    height: calc(1em + 1.5rem + 2px) !important;
    padding: 0.75rem 1rem;
    color: #272727 !important;

}
.form-control, .custom-select {
    font-size: 15px;
    font-weight: 900;
    display: block;
    width: 100%;
    height: calc(1.6em + 1.5rem + 2px);
    padding: 0.75rem 1rem;
    color: #2a2a2a;
    background-clip: padding-box;
    border: 2px solid rgba(0, 0, 0, 0.12);
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
    border-radius: 0.375rem;
}
.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
    font-size: 16px;
    font-weight: 600;
}
.form-group {
    margin-bottom: 14px;
}
        .main-menu li a.nav-link {
    padding: 0.85rem 1rem;
    font-size: 17px;
    font-weight: 700;
    position: relative;
    font-family: var(--vehron-text-font);
}
        .main-menu li a.nav-link:hover, .action-btns a.btn-link:hover, .navbar-dark.sticky-header.affix .main-menu li a.nav-link:hover, .navbar-dark.sticky-header.affix .action-btns a.btn-link:hover {
    color: #ffffff;
}
        h1,
        .display-1,
        .h2,
        .display-2,
        .h3,
        .display-3,
        .h4,
        .display-4,
        .h5,
        .display-5,
        .h6,
        .display-6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {

            color: #000000;
        }

        .text-primary {
            color: #077f28 !important;
        }
        .sm-currency{
            font-size:20px;
        }

        .crypto-team-info p {
            color: #151414;
            font-weight: 500;
        }

        .img-rounded {
            border-radius: 20px
        }

        .btn-primary {
            color: #1d1d1d;
            background: #fad507 !important;
            text-transform: uppercase;
            border-color: #fad507;
            -webkit-box-shadow: 0 11px 18px -8px rgb(23 92 255 / 60%);
            box-shadow: 0 11px 18px -8px rgb(23 92 255 / 60%);
        }

    </style>

</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="{{asset('meta/img/favicon.png')}}" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <header class="main-header w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header" style="background-color: #0ae258;">
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
                                <a class="nav-link" href="{{ route('user.home') }}"  aria-expanded="false">
                                    @lang('Dashboard')
                                </a>
                            </li>
                            <li><a href="{{ route('user.deposit') }}" class="nav-link">@lang('Deposit')</a></li>
                            <li><a href="{{ route('user.withdraw') }}" class="nav-link">@lang('Cashout')</a></li>
                            <li class="nav-item dropdown vsm-dropdown-section">
                                <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account Reports</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom" style="width: 200px">
                                        <div class="dropdown-grid-item">

                                            <a href="{{ route('user.trx.log') }}" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-dollar-sign"></i></span>
                                                <div class="drop-title">@lang('Transaction Log')</div>
                                            </a>
                                            <a href="{{ route('user.investment.log') }}" class="dropdown-link">
                                                <span class="me-2"><i class="far fa-wallet"></i></span>
                                                <div class="drop-title">@lang('Investment Log')</div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ route('user.refer') }}" class="nav-link">@lang('Referrals')</a></li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">@lang('Investor Account')</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom" style="width: 200px">
                                        <div class="dropdown-grid-item">

                                            <a href="{{ route('user.profile.setting') }}" class="dropdown-link px-0" onclick="web3Login();">
                                                <div class="drop-title">@lang('Profile Settings')</div>
                                            </a>

                                            <a href="{{ route('user.twofactor') }}" class="dropdown-link px-0">
                                                <div class="drop-title">@lang('2FA Security')</div>
                                            </a>
                                            <a href="{{ route('user.change.password') }}" class="dropdown-link px-0">
                                                <div class="drop-title">@lang('Change Password')</div>
                                            </a>
                                            <a href="{{ route('user.logout') }}" class="dropdown-link px-0">
                                                <div class="drop-title">@lang('Sign out')</div>
                                            </a>
                                        </div>

                                    </div>
                            </li>
                        </ul>
                    </div>
                    @auth
                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="{{route('user.withdraw')}}" class="btn btn-primary"><i class="far fa-wallet"></i> Cashout Profits</a>
                    </div>
                    @endauth
                    @guest
                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="{{route('login')}}" class="btn btn-link text-decoration-none me-2">Sign In</a>
                        <a href="{{route('register')}}" class="btn btn-primary">BECOME AND INVESTOR</a>
                    </div>
                    @endguest

                    <!--offcanvas menu start-->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                        <div class="offcanvas-header d-flex align-items-center mt-4">
                            <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                                <img src="{{asset('meta/img/favicon.png')}}" alt="logo" width="100" class="img-fluid ps-2" />
                            </a>
                            <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="far fa-close"></i>
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('user.home') }}"  aria-expanded="false">
                                        @lang('Dashboard')
                                    </a>
                                </li>
                                <li><a href="{{ route('user.deposit') }}" class="nav-link">@lang('Deposit')</a></li>
                                <li><a href="{{ route('user.withdraw') }}" class="nav-link">@lang('Cashout')</a></li>
                                <li class="nav-item dropdown vsm-dropdown-section">
                                    <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account Reports</a>
                                    <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                        <div class="dropdown-grid rounded-custom" style="width: 200px">
                                            <div class="dropdown-grid-item">

                                                <a href="{{ route('user.trx.log') }}" class="dropdown-link">
                                                    <span class="me-2"><i class="far fa-dollar-sign"></i></span>
                                                    <div class="drop-title">@lang('Transaction Log')</div>
                                                </a>
                                                <a href="{{ route('user.investment.log') }}" class="dropdown-link">
                                                    <span class="me-2"><i class="far fa-wallet"></i></span>
                                                    <div class="drop-title">@lang('Investment Log')</div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('user.refer') }}" class="nav-link">@lang('Referrals')</a></li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">@lang('Investor Account')</a>
                                    <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                        <div class="dropdown-grid rounded-custom" style="width: 200px">
                                            <div class="dropdown-grid-item">

                                                <a href="{{ route('user.profile.setting') }}" class="dropdown-link px-0" onclick="web3Login();">
                                                    <div class="drop-title">@lang('Profile Settings')</div>
                                                </a>

                                                <a href="{{ route('user.twofactor') }}" class="dropdown-link px-0">
                                                    <div class="drop-title">@lang('2FA Security')</div>
                                                </a>
                                                <a href="{{ route('user.change.password') }}" class="dropdown-link px-0">
                                                    <div class="drop-title">@lang('Change Password')</div>
                                                </a>
                                                <a href="{{ route('user.logout') }}" class="dropdown-link px-0">
                                                    <div class="drop-title">@lang('Sign out')</div>
                                                </a>
                                            </div>

                                        </div>
                                </li>
                            </ul>
                            <div class="action-btns mt-4 ps-3">
                                @auth

                                    <a href="{{route('user.home')}}" class="btn btn-primary"><i class="far fa-wallet"></i> Cashout Profits</a>

                                @endauth
                                @guest

                                    <a href="{{route('login')}}" class="btn btn-link text-decoration-none me-2">Sign In</a>
                                    <a href="{{route('register')}}" class="btn btn-primary">BECOME AND INVESTOR</a>

                                @endguest
                            </div>
                        </div>
                    </div>
                    <!--offcanvas menu end-->
                </div>
            </nav>
        </header>

        @yield('content')

       
        <!--footer bottom start-->
        <div class="footer-bottom
    bg-dark-black
     py-4" style="background-color: #f5f5f5;
    ">
            @php
            $footer = getContent('footer.content', true);
            $medias = getContent('footer.element');
            $policy = getContent('policy_pages.element');
            @endphp

            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12">
                        <p style="font-size: 11px">This site is operated by Bossman Inc.,"Bossman", which is a registered broker-dealer. Bossman gives investment advice, endorsement, analysis or recommendations with respect to all securities. All securities listed here are being offered by, and all information included on this site is the responsibility of Bossman. Bossman has taken steps to verify the adequacy, accuracy, or completeness of any information. Neither Bossman nor any of its officers, directors, agents and employees makes any warranty, express or implied, of any kind whatsoever related to the adequacy, accuracy or completeness of any information on this site of the use of information on this site. </p>
                    </div>
                    <div class="col-md-7 col-lg-7">
                        <div class="copyright-text">
                            <p class="mb-lg-0 mb-md-0">&copy; 2016-2022 Bossmanafrica.com Rights Reserved by the Bossman Invesment Corporation (BIC) </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="footer-single-col text-start text-lg-end text-md-end">

                            <ul class="list-unstyled list-inline footer-social-list mb-0">
                                @foreach($medias as $media)
                                <li class="list-inline-item"><a href="{{ $media->data_values->soial_media_link }}" target="_blank"> @php echo $media->data_values->icon; @endphp </a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom end-->
        </footer>
        <!--footer section end-->


    </div>



    @include('frontend.partials.scripts')
       @stack('script-lib')

  @stack('script')

  @include('partials.plugins')

  @include('partials.notify')
   

</body>

</html>
