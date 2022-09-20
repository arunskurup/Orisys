@extends('layouts.frontend')

@section('content')
    <!-- Home slider -->
    <section class="p-0">
        <div class="slide-1 home-slider">
            <div>
                <div class="home">
                    <img src="../assets/images/home-banner/36.jpg" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>20% off</h4>
                                        <h1>top collection</h1><a href="#" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home">
                    <img src="../assets/images/home-banner/37.jpg" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>welcome to fashion</h4>
                                        <h1>women collection</h1><a href="#" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- box layout start -->
    <div class="container box-layout bg-image">


        <!-- Product slider -->
        <section class="section-b-space ratio_asos">
            <div class="container">
                <div class="title1">
                    <h4>special offer</h4>
                    <h2 class="title-inner1">top collection</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 m-auto">
                        <div class="product-para">
                            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="product-4 product-m no-arrow">

                            @foreach ($Product as $item)

                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                            sale</span></div>
                                    <div class="front">
                                        <a href="#"><img
                                                src="{{$item->image}}"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>
                                    <div class="back">
                                        <a href="#"><img
                                                src="{{$item->image}}"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>

                                </div>
                                <div class="product-detail">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i></div>
                                    <a href="#">
                                        <h6>{{$item->name}}</h6>
                                    </a>
                                    <h4>₹{{$item->price}}</h4>
                                    <ul class="color-variant">
                                        <li class="bg-light0"></li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-light2"></li>
                                    </ul>
                                </div>
                            </div>

                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product slider end -->


        <!-- Parallax banner -->
        <section class="p-0">
            <div class="full-banner parallax p-left text-center">
                <img src="../assets/images/parallax/16.jpg" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="banner-contain">
                                <h2>2018</h2>
                                <h3>fashion trends</h3>
                                <h4>special offer</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Parallax banner end -->


        <!-- Tab product -->
        <div class="title1 section-t-space">
            <h4>exclusive products</h4>
            <h2 class="title-inner1">special products</h2>
        </div>
        <section class="section-b-space pt-0 ratio_asos">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="theme-tab">

                            <div class="tab-content-cls">
                                <div id="tab-4" class="tab-content active default">
                                    <div class="product-4 product-m no-arrow">

                                        @foreach ($Product as $item)

                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#"><img src="{{$item->image}}"
                                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                </div>
                                                <div class="back">
                                                    <a href="#"><img src="{{$item->image}}"
                                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                </div>

                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                <a href="#">
                                                    <h6>{{$item->name}}</h6>
                                                </a>
                                                <h4>₹{{$item->price}}</del></h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>

                                        @endforeach


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tab product end -->


    </div>
    <!-- box layout end -->
@stop
