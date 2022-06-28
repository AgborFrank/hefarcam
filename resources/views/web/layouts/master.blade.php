<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    @include('partials.seo')

    <!--title-->
    <title>{{$title ?? 'Bossman -Agriculture Investment Platform'}}</title>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>

   @include('frontend.partials.style')


</head>

<body style=" overflow-x: hidden;">

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
       @include('frontend.partials.header')
        <!--header section end-->

       @yield('content')

       @include('frontend.partials.footer')

    </div>



    @include('frontend.partials.scripts')

    <script>
        async function web3Login() {
            if (!window.ethereum) {
                alert('We couldn\'t find a MetaMask wallet. Please install MetaMask first.');
                return;
            }

            const provider = new ethers.providers.Web3Provider(window.ethereum);

            let response = await fetch('/web3-login-message');
            const message = await response.text();

            await provider.send("eth_requestAccounts", []);
            const address = await provider.getSigner().getAddress();
            const signature = await provider.getSigner().signMessage(message);

            response = await fetch('/web3-login-verify', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    'address': address,
                    'signature': signature,
                    '_token': '{{ csrf_token() }}'
                })
            });
            const data = await response.text();

            console.log(data);
        }
    </script>

</body>

</html>
