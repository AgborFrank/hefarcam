<section class="team-members pt-60 pb-120" style="background: #2ebc3224;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="section-heading text-center">
                    <h4 class="text-primary h5">An Experienced Team</h4>
                    <h2>Our Executive Managers</h2>
                    <p>Through the Vehron career initiative, we are changing the way work gets done across the world with a decentralized one global ecosystem -Vehron. </p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($teams as $key => $data)
            <div class="col-lg-3 col-6 mb-3">
                <div class="single-article rounded-custom mb-4 mb-lg-0">
                    <a href="#" class="article-img">
                        <img src="{{asset($data->image)}}" alt="{{$data->name}}" class="img-fluid">
                    </a>
                    <div class="article-content p-4">
                        <h2 class="h5 article-title limit-2-line-text">{{$data->name}}</h2>
                        <p class="limit-2-line-text">{{$data->desc}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--pricing section end-->
