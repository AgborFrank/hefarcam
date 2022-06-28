@php
$partners = \App\Models\Partner::all();
@endphp
<style>
    .integration-list li .single-integration img {
    width: 100%;
    height: auto;
    max-width: 110px;
    max-height: 110px;
    margin: auto;
}
.integration-list li .single-integration {
    -webkit-box-shadow: rgb(13 21 55 / 6%) 0 5px 50px;
    box-shadow: rgb(13 21 55 / 6%) 0 5px 50px;
    display: block;
    margin: auto;
    text-align: center;
    background: var(--bs-white);
    padding: 20px;
    border-radius: 6px;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    height: 130px;
    vertical-align: middle;
    justify-content: center;
    align-items: center;
    align-content: center;
}
</style>
@foreach ( $partners as $partner )

<li>
<div class="single-integration justify-content-center align-items-center my-auto">
    <a href="{{$partner->website}}" target="_blank" style="text-decoration: none">
    <img src="{{asset($partner->image)}}" alt="integration" class="img-fluid">
</a>
</div>
</li>
@endforeach
