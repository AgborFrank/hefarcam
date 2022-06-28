<div class="row">
    @foreach ($blog->take(3) as $item)
    <div class="col-lg-4 col-md-6 mb-3">
        <div class="single-article rounded-custom mb-4 mb-lg-0">
            <a href="{{route('front.blog', [$item->id, $item->slug])}}" class="article-img">
                <img src="{{asset($item->image)}}" alt="{{$item->title}}" class="img-fluid">
            </a>
            <div class="article-content p-4">
                
                <a href="{{route('front.blog', [$item->id, $item->slug])}}">
                    <h2 class="h5 article-title limit-2-line-text">{{$item->title}}</h2>
                </a>
                <p class="limit-2-line-text">{{$item->excerpt}}</p>

                <a href="javascript:;">
                    <div class="d-flex align-items-center pt-4">
                        <div class="avatar">
                            <img src="{{asset('meta/img/favicon.png')}}" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                        </div>
                        <div class="avatar-info">
                            <h6 class="mb-0 avatar-name">Media Editor</h6>
                            <span class="small fw-medium text-muted">Bossman Capital -Africa</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
    @endforeach
    <div class="col-12 mx-auto text-center mt-4">
                    <a href="{{route('blog')}}" class="btn btn-primary">View more articles</a>
    </div>

</div>

