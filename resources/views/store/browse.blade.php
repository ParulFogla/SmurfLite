@extends('web.webmaster')

@section('content')
<!--? Hero Start -->
    <div class="slider-area ">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Store</h2>
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

<!-- Store Start-->
            <div class="card-deck">
            @foreach($stores as $store)
                        <div class="card col-sm-6 col-md-4 col-lg-3 col-xl-3" >
                            <a href="/service/{{ $store->id }}" ><img class="card-img-top" src="{{asset('assets/img/gallery/brand3.png')}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title text-dark">{{ $store->title }}</h5>
                            </div>
                        </div>
                
            @endforeach
            </div>
<!-- Store End-->

        </div>
    </section>
<!-- Services End-->
@endsection