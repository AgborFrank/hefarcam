@php
    $user = Auth::user();
@endphp
@php
    $testimonial = \App\Models\Testimonial::all();
@endphp
<section class="hero-section ptb-120 text-white " style="background: url('{{asset('meta/img/greenfield.jpeg')}}')no-repeat center center; display: block;
 max-width: 100%;
top: -26px;
    height: auto;
    line-height: 1;
    position: relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-10 mx-auto">
                <div class="hero-content-wrap mt-5 mx-auto">
                    <h4 class="fw-bold display-8  text-white">{{$greetings}},</h4>
                    <h1 class="display-5  text-white">{{$user->firstname .' '. $user->lastname}}</h1>
                    <p class="text-white" style="line-height: 24px;">We don't know you that well yet, but we've got a feeling you're after more than Target to become financially free. Bossman has a reputation of raising new millionaires weekly.</p>
                    <a href="{{route('user.deposit')}}" class="btn btn-sm btn-primary">Deposit Funds</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 mt-5">
                <div class="hero-img position-relative circle-shape-images">
                  <p class="fw-light display-5  text-white">{{ showAmount($user->balance) }}  {{ $general->cur_sym }}</p>
                    <h4 class="lead text-white">Total Account Balance</h4>

                </div>
            </div>
        </div>
    </div>
</section>

