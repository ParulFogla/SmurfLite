@extends('web.webmaster')

@section('content')
<!--? Hero Start -->
    <div class="slider-area ">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Hero End -->
<!-- Services Start-->
    <section class="about-area about2">
        <div class="container">

<!-- Surfing Services Start-->
            <div class="hero-cap hero-cap2 text-center">
                <h3>Smurfing Services</h3>
            </div>
            <div class="card-deck">
            @foreach($smurfs as $smurf)
                        <div class="card col-sm-6 col-md-4 col-lg-3 col-xl-3" >
                            <a href="#" ><img class="card-img-top" src="{{asset('assets/img/gallery/brand3.png')}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title text-dark">{{ $smurf->service_title }}</h5>
                                <p class="card-text text-dark">Details :{{ $smurf->description }}</p>
                                <p class="card-text text-dark">Price :Rs.{{ $smurf->price }}</p>
                            </div>
                        </div>
            @endforeach
            </div>
<!-- Smurfing Services End-->

<!-- Boosting Services Start-->
            <div class="hero-cap hero-cap2 text-center">
                <h3>Boosting Services</h3>
            </div>
            <div class="card-deck">
            @foreach($boosteds as $boosted)
                        <div class="card col-sm-6 col-md-4 col-lg-3 col-xl-3" >
                            <a href="#" ><img class="card-img-top" src="{{asset('assets/img/gallery/brand3.png')}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title text-dark">{{ $boosted->service_title }}</h5>
                                <p class="card-text text-dark">Price :Rs.{{ $boosted->price }}</p>
                            </div>
                        </div>
            @endforeach
            </div>
<!-- Boosting Services End-->

        </div>
    </section>
<!-- Services End-->
@endsection