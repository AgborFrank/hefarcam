<!--customer review tab section start-->
@php
    $testimonial = \App\Models\Testimonial::all();
@endphp
@if (count($testimonial)>0)
<section class="testimonial-section ptb-120 bg-light">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center">
                    <h4 class="h5 text-primary">Testimonial</h4>
                    <h2>What Our Investors Say About Us</h2>
                    <p>We pride ourselves in offering world-class investment opportunities for everyone to benefit while ensuring a sustainable food production for all.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative w-100">
                    <div class="swiper-container testimonialSwiper">
                        <div class="swiper-wrapper">
                            @foreach ($testimonial as $item)
                            <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                <img src="{{asset('meta/img/quotes-dot.svg')}}" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                <div class="d-flex mb-32 align-items-center">
                                    <img src="{{asset($item->image)}}" class="img-fluid me-3 rounded" width="60" alt="user">
                                    <div class="author-info">
                                        <h6 class="mb-0">{{$item->name}}</h6>
                                        <small>{{$item->occupation}}</small>
                                    </div>
                                </div>
                                <blockquote>
                                    <h6>{{$item->title}}</h6>
                                {{$item->content}}
                                </blockquote>
                                <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                </ul>
                                <img src="{{asset('meta/img/quotes.svg')}}" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
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

@endif
<!--customer review tab section end-->
