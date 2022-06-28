<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">


    @include('partials.seo')

    <!--favicon icon-->
    <link rel="icon" href="{{asset('meta/img/favicon.png')}}" type="image/png" sizes="16x16">

    <!--title-->
    <title>{{$general->sitename(__($pageTitle)) ?? 'Home Page'}}</title>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>

    @include('web.partials.style')
    @stack('style-lib')

    @stack('style')
    <style>
        .img-r {
            border-radius: 20px;
        }

        .bg-dark {
            background-color: #077f28 !important;
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

        .navbar-dark.sticky-header.affix .main-menu li a.nav-link,
        .navbar-dark.sticky-header.affix .action-btns a.btn-link {
            color: #ffffff;
        }

        .btn-primary:hover {
            color: #105223;
            background-color: #057f27;
            border-color: #fad506;
            -webkit-box-shadow: none;
            box-shadow: none;
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

        <!--header section start-->
        @include('web.partials.header_transparent')
        <!--header section end-->

        @yield('content')

        @include('web.partials.footer')
        <div id="fb-root"></div>

        <!-- Your Chat Plugin code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

    </div>



    @include('web.partials.scripts')
    @stack('script-lib')

    @stack('script')

    @include('partials.plugins')

    @include('partials.notify')


</body>

</html>
