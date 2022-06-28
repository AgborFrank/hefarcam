<!--our work process end-->
@php
$cases = \App\Models\TokenUsecase::all();
@endphp

@if (count($cases)>0)
<!--customer review slider section start-->
<section class="testimonial-section bg-dark text-white  ptb-120">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h4 class="h5 text-warning text-primary">"One Currency, for Everyone, Everywhere".</h4>
                    <h2>A single currency for the digital world for everyone</h2>
                    <p>RIV coin is a decentralized crypto currency design to serve as the REVIVAL to the true and intended vision of the original crypto currency. A single currency for the digital worldm for everyone creating equal opportunities with a fair free distribution of RIV for a true decentralized and mainstream adoption.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                    <div class="swiper-container testimonialSwiper">
                        <div class="swiper-wrapper">


                            @foreach ($cases as $case)
                            <div class="swiper-slide bg-custom-light text-white  p-5 rounded-custom position-relative">
                                <img src="{{asset($case->image)}}" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                <div class="d-flex mb-32 align-items-center">
                                    <img src="{{asset($case->image)}}" class="img-fluid me-3 rounded" width="60" alt="user">
                                    <div class="author-info">
                                        <h6 class="mb-0">{{$case->rep_name}}</h6>
                                        <small>{{$case->role}}</small>
                                    </div>
                                </div>
                                <blockquote>
                                    <h6>{{$case->platform}}</h6>
                                    {!!$case->desc!!}
                                </blockquote>
                                <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                    @if ($case->website)
                                    <li class="list-inline-item"><i class="fas fa-globe text-warning 2x"></i> <a href="{{$case->website}}" class="text-white" style="text-decoration: none; font-weight:700">{{$case->website}}</a></li>
                                    @endif


                                </ul>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <span class="swiper-button-next"></span>
                    <span class="swiper-button-prev"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--customer review slider section end-->

@endif
