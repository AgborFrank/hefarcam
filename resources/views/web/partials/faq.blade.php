<!-- Faq Start -->
@php
    $faq = \App\Models\Faq::all();
@endphp
<section class="cyber-faq pt-120 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-6">
                <div class="section-heading text-center mb-5">
                    <h5 class="h6 text-primary">Quick Help</h5>
                    <h2>Frequently Asked Question</h2>
                    <p>
                        We’ve answered some of the most frequent questions about our platform. Check here if you want to make sure your questions are answered.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cyber-faq-wrapper">
                    <div class="accordion faq-accordion" id="accordionExample">
                        <div class="row">
                            @forelse ($faq->take(6) as $item)
                            <div class="col-6 mb-2">
                                <div class="accordion-item  rounded @if($item->id=='1') active @endif">
                                    <h5 class="accordion-header" id="faq-{{$item->id}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$item->id}}" aria-expanded="true">
                                            {{$item->question}}
                                        </button>
                                    </h5>
                                    <div id="collapse-{{$item->id}}" class="accordion-collapse collapse @if($item->id=='1')
                                    show
                                    @endif" aria-labelledby="faq-{{$item->id}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{$item->answer}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Faq End -->
