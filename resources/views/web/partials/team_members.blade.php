

@foreach($tppInvestors as $singleInvestor)
<div class="col-lg-3 col-6 col-sm-12">
    <div class="single-crypto-team  mb-30 mb-lg-0" style="background-color: #07c03b">
        <img src="{{ getImage( 'assets/images/frontend/topInvestor/' .@$singleInvestor->data_values->image, '300x250') }}" alt="#" class="img-fluid" />
        <div class="crypto-team-info pt-4 pb-1">
            <h4 class="text-white h5">{{ __($singleInvestor->data_values->name) }}</h4>

            <ul class="crypto-team-social list-unstyled list-inline text-dark">
                <li class="list-inline-item">
                    <a href="#" class="text-decoration-none">
                        {{ __($singleInvestor->data_values->country) }}
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-decoration-none">
                        {{ $singleInvestor->data_values->date }}
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
@endforeach
