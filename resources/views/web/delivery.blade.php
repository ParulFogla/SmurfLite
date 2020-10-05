@extends('web.webmaster')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Delivery Method and Time</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? About Area start -->
        <section class="about-area about2 section-padding30">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-15 col-lg-16">
                        <div class="about-caption2 mb-50">
                        
                       <p class="text-white"> Products are sent as soon as possible via e-mail (the one which the end user registers on the website) after processing the order. The estimated delivery time is one minute to twenty-four hours submitting the order in the system. If the order delivery is delayed once five minute period has passed, the customer should contact our customer service by live chat or e-mail.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        
<!--? Testimonial Start -->
<div class="testimonial-area testimonial-padding">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="{{asset('assets/img/gallery/testimonial.png')}}" alt="">
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{asset('assets/img/gallery/Homepage_testi.png')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="{{asset('assets/img/gallery/testimonial.png')}}" alt="">
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{asset('assets/img/gallery/Homepage_testi.png')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!--? Blog Area Start -->
    <section class="blogs-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-30">
                        <h2>Tourist Blog</h2>
                        <p>Our Recent Photos</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blogs mb-100">
                        <div class="blog-img">
                            <img src="{{asset('assets/img/gallery/blog1.png')}}" alt="">
                        </div>
                        <div class="blog-cap">
                            <span class="color1">23 Dec, 2020</span>
                            <h4><a href="blog_details.html">Addiction When Gambling Becomes</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blogs mb-100">
                        <div class="blog-img">
                            <img src="{{asset('assets/img/gallery/blog2.png')}}" alt="">
                        </div>
                        <div class="blog-cap">
                            <span class="color1">23 Dec, 2020</span>
                            <h4><a href="blog_details.html">Addiction When Gambling Becomes</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blogs mb-100">
                        <div class="blog-img">
                            <img src="{{asset('assets/img/gallery/blog3.png')}}" alt="">
                        </div>
                        <div class="blog-cap">
                            <span class="color1">23 Dec, 2020</span>
                            <h4><a href="blog_details.html">Addiction When Gambling Becomes</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Brand Shape  -->
        <div class="blog-shape d-none d-xl-block">
            <img src="{{asset('assets/img/gallery/blog_shape.png')}}" alt="">
        </div>
    </section>
    <!-- Blog Area End -->
    </main>
@endsection