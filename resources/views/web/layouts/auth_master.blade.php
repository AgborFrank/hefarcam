
<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    
    @include('partials.seo')

    <!--title-->
    <title>{{$title ?? 'Bossman -Agriculture Investment Platform'}}</title>

    <!--title-->
    <title>{{$title ?? 'Login to Investor Account'}}</title>

    <title>@yield('title')</title>

      @include('frontend.partials.style')
      <style>
        .text-primary {
    color: #1ea701 !important;
}.btn-primary {
    color: var(--bs-white);
    background-color: #1fa700;
    border-color: #1fa700;
    -webkit-box-shadow: 0 11px 18px -8px rgb(23 92 255 / 60%);
    box-shadow: 0 11px 18px -8px rgb(31 167 0 / 41%);
}a, .btn-link {
    color: #1fa700;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
      </style>

</head>

<body>
    @php
    $check_users = \App\Models\User::count();
    @endphp
    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/favicon.png" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">
<style>
    .alert-danger {
    color: #7d7c7f;
    background-color: #ffffff;
    border-color: #ffffff;
    border-radius: 10px;
    box-shadow: 1px 1px 4px 1px rgb(0 0 0 / 9%);
}
    .btn-default {
        border-color: #e5e5e6;
    border-left: 0px;
    border-radius: 0px 6px 6px 0px;
    color: #908a97;
    }
</style>
       @yield('content')

    </div>

    @include('frontend.partials.scripts')
    <script>
        function visibility3() {
  var x = document.getElementById('login_password');
  if (x.type === 'password') {
    x.type = "text";
    $('#eyeShow').show();
    $('#eyeSlash').hide();
  }else {
    x.type = "password";
    $('#eyeShow').hide();
    $('#eyeSlash').show();
  }
}


    </script>
</body>

</html>
