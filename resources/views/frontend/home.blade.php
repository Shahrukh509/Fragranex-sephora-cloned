@extends('frontend.layouts.master')
@section('title')
Home
@endsection
@section('meta_title')
Home
@endsection
@section('meta_description')
This is our perfume shop.......
@endsection
@section('meta_keyword')
Perfume-shop
@endsection

@section('content')
 <!-- main sec -->
    <div role="main" id="content">
        <section class="main_page">
            <div class="page-content">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @if(isset($sliders))
                        @foreach($sliders as $key=>$value)
                        {{--  {{ dd($value) }} --}}
                        <div class="carousel-item {{ ($key===0)? 'active':'' }}">
                            <img class="d-block w-100 img-fluid" src="{{ $value->image}}" alt="slider{{ $value->position }}">

                        </div>
                        @endforeach
                        @else
                        <div class="carousel-item active">
                         <img class="d-block w-100 img-fluid" src="{{ asset('public/frontend/img/homeimage_0_mq4@2x.webp') }}" alt="">
                     </div>
                        @endif
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>




                <div class="home-wrapper std-side-padding">
                    <div>
                        <div class="top-brand bg-padding">
                            <h1 class="title">Top Fragrance Brands</h1>
                            <span>
                                <a class="link-1" href="{{ route('front.all.brands')}}" aria-label="View all brands">View All
                                    Brands</a>
                            </span>
                            <div class="limit-width">
                                <div class="brand-wrapper">
                                    @if(isset($brands))
                                    @foreach($brands as $brand)
                                    <div class="c-6-of-12 c4-4-of-12">
                                        <div>
                                            <div class="brand-section">
                                                <div class="c4-6-of-12">
                                                    <a href="#" aria-label="{{ $brand->name }}">
                                                        <picture>
                                                            <source srcset="img/dolce-gabbana.webp" type="image/webp" />
                                                            <img src="{{ $brand->image }}" alt="{{ $brand->name }}" width="120" height="120">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="c4-6-of-12">
                                                    <div>
                                                        <a class="link-1" href="{{ route('front.product.show',[$brand->slug]) }}" aria-label="Shop All Dolce &amp; Gabbana">
                                                            {{ $brand->name }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-seller">
                        <h2 class="title">Best Sellers</h2>
                        <span>
                            <a class="link-1" href="{{ route('front.overview',['department','best-seller']) }}">See All</a>
                        </span>


                        <div class="page-content page-container " id="page-content">
                            <div class="slider_carasoul">
                                <div class="padding">
                                    <div class="row container-fluid">
                                        <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- <h4 class="card-title">Basic carousel</h4> -->
                                                    <div class="owl-carousel">
                                                        @if(isset($best_seller->product))

                                                          @foreach($best_seller->product as $data)
                                                            <div class="item">
                                                                <img src="{{ $data->image->path??'' }}" alt="image" />
                                                                <div class="desc-section">
                                                                <a href="{{ route('front.product.show',[$data->brand->slug,$data->slug]) }}">
                                                                <div class="serif h3">
                                                                {{ $data->name??'' }}
                                                                </div>
                                                                <div>
                                                                By {{ $data->brand->name??'' }}

                                                                </div>
                                                               </a>
                                                                <div class="product-review ">
                                                                <div class="p-w-r">
                                                                <div class="pr-stars">
                                                                <div class="stars-total" style="width: 92%;"></div>
                                                                </div>
                                                                <div class="review-count">
                                                                (<span>1059</span>)
                                                                </div>
                                                                </div>
                                                                </div>
                                                                <div class="slider-price">
                                                                <span>As low as</span> <bdo dir="ltr">$&nbsp;10.16</bdo> </div>
                                                              </div>
                                                            </div>
                                                          @endforeach
                                                          @else

                                                          <h1> No image found</h1>
                                                        @endif
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="shop-by-type bg-padding">
                        <h2 class="title">Shop By Type</h2>
                        <div class="limit-width">
                            @if(isset($types))
                            @foreach($types as $type)
                            <div class="c-6-of-12 c4-3-of-12">
                                <div class="grid-div">
                                    <div>
                                        <div>
                                            <a href="">
                                                <picture class="lazy-img">
                                                    <!-- <source data-srcset="https://img.fragrancex.com/images/products/sku/small/verertsm.webp" type="image/webp" /> -->
                                                    <img src="{{ $type->image }}" alt="{{ $type->name }}" width="250" height="250">
                                                </picture>
                                            </a>
                                        </div>
                                        <a class="link-1" href="{{ route('front.overview',['sets',$type->name]) }}" aria-label="Shop all testers">
                                            <h3 class="serif">{{ $type->name }}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach()
                            @else
                            <h1> No type found</h1>
                            @endif
                        </div>
                    </div>
                    <div class="review-mix d-flex align-items-center">
                        <div class="limit-width">
                            <div class="c4-7-of-12 review-section" id="review-section">
                                <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner  py-5">
                                        <div class="carousel-item active">
                                            <div class="content-container">
                                                <div class="content slide-0">
                                                    <div class="customer-review-cell">
                                                        <div class="review-img">
                                                            <img class="" src="https://img.fragrancex.com/images/assets/icons/selectionbottles.svg" data-src="https://img.fragrancex.com/images/assets/icons/selectionbottles.svg" alt="Bottles of perfume image" width="60" height="60">
                                                        </div>
                                                        <div class="serif review-text">"Products are high quality and come in great packaging. Scents match to expectations and would buy again. Very satisfied with my order."</div>
                                                        <div class="review-name text-dark mt-4">
                                                            <h6>John</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="carousel-item ">
                                            <div class="content-container">
                                                <div class="content slide-0">
                                                    <div class="customer-review-cell">
                                                        <div class="review-img">
                                                            <img class="" src="https://img.fragrancex.com/images/assets/icons/selectionbottles.svg" data-src="https://img.fragrancex.com/images/assets/icons/selectionbottles.svg" alt="Bottles of perfume image" width="60" height="60">
                                                        </div>
                                                        <div class="serif review-text">"Products are high quality and come in great packaging. Scents match to expectations and would buy again. Very satisfied with my order."</div>
                                                        <div class="review-name text-dark mt-4">
                                                            <h6>John</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="carousel-item ">
                                            <div class="content-container">
                                                <div class="content slide-0">
                                                    <div class="customer-review-cell">
                                                        <div class="review-img">
                                                            <img class="" src="https://img.fragrancex.com/images/assets/icons/selectionbottles.svg" data-src="https://img.fragrancex.com/images/assets/icons/selectionbottles.svg" alt="Bottles of perfume image" width="60" height="60">
                                                        </div>
                                                        <div class="serif review-text">"Products are high quality and come in great packaging. Scents match to expectations and would buy again. Very satisfied with my order."</div>
                                                        <div class="review-name text-dark mt-4">
                                                            <h6>John</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                            </div>
                            <div class="c4-5-of-12 shop-mix-section">
                                @php
                                $hard_to_find = \App\Models\Department::where('name','like','%hard to find%')->first();

                                $celebrity = \App\Models\Department::where('name','like','%Celebrity Scents%')->first();

                                // dd($hard_to_find);
                                @endphp
                                <div class="c2-6-of-12 c4-12-of-12">
                                    <a href="{{ route('front.overview',['department','hard-to-find'])  }}" aria-label="Shop all hard to find fragrances">
                                        <div>
                                            <div>
                                                <picture class="lazy-img">
                                                    <!-- <source data-srcset="https://img.fragrancex.com/images/assets/product%20images/fx-hard-to-find.webp" type="image/webp" /> -->
                                                    <img src="{{ $hard_to_find->image??'' }}" height="140" width="140">
                                                </picture>
                                            </div>
                                            <div>
                                                <h3 class="h3 serif">
                                                   {{ $hard_to_find->name?? '' }}
                                                </h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="c2-6-of-12 c4-12-of-12">
                                    <a href="{{ route('front.overview',['department','celebrity-scents'])  }}" aria-label="Shop all celebrity scents">
                                        <div>
                                            <div>
                                                <picture class="lazy-img">
                                                    <!-- <source data-srcset="https://img.fragrancex.com/images/assets/product%20images/fx-celebrity-scents.webp" type="image/webp" /> -->
                                                    <img src="{{ $celebrity->image?? '' }}" height="140" width="140">
                                                </picture>
                                            </div>
                                            <div>
                                                <h3 class="h3 serif">
                                                    {{ $celebrity->name?? '' }}
                                                </h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-arrival">
                        <h2 class="title">New Arrivals</h2>
                        <span><a class="link-1" href="{{ route('front.overview',['department','new-arrival']) }}">See All</a></span>


                        <div class="page-content page-container " id="page-content">
                            <div class="slider_carasoul">
                                <div class="padding">
                                    <div class="row container-fluid">
                                        <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- <h4 class="card-title">Basic carousel</h4> -->
                                                    <div class="owl-carousel_1">
                                                        @if(isset($new_arrival->product))
                                                        @foreach($new_arrival->product as $new)
                                                        <div class="item">
                                                            <div class="content-container">
                                                                <div class="content slide-0">
                                                                    <a href="{{ route('front.product.show',[$new->brand->slug,$new->slug]) }}" class="click-box">
                                                                        <div>
                                                                            <picture class="lazy-img">
                                                                                <!-- <source data-srcset="https://img.fragrancex.com/images/products/sku/small/80927m.webp" type="image/webp" /> -->
                                                                                <img src="{{ $new->parent_image->path??'' }}" width="206" height="206" alt="{{ $new->name }}">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="desc-section">
                                                                            <div class="serif h3">
                                                                                <h3 class="text-dark">{{ $new->name }}</h3>
                                                                            </div>
                                                                            <div>
                                                                                <h6 class="text-dark">{{ $new->name }}</h6>
                                                                            </div>
                                                                            <div class="slider-price text-dark">
                                                                                <span>As low as</span> <bdo dir='ltr'>$&nbsp;{{ $new->variable_products->price}}</bdo>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <input type="hidden" class="ga-item-model" value=""
                                                                />
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        @else
                                                        <h1>no data found</h1>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- display products -->

                    <!-- <section class="dP_slider mx-auto">

                        <div class="viewed ">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="bbb_viewed_title_container">
                                            <h3 class="bbb_viewed_title">Recently Viewed</h3>
                                            <div class="bbb_viewed_nav_container">
                                                <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fa fa-chevron-left"></i></div>
                                                <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                                            </div>
                                        </div>

                                        <div class="bbb_viewed_slider_container">



                                            <div class="owl-carousel owl-theme bbb_viewed_slider">

                                                <div class="owl-item">
                                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg" alt=""></div>
                                                        <div class="bbb_viewed_content text-center">
                                                            <div class="bbb_viewed_price">₹12225<span>₹13300</span></div>
                                                            <div class="bbb_viewed_name"><a href="#">Alkatel Phone</a></div>
                                                        </div>
                                                        <ul class="item_marks">
                                                            <li class="item_mark item_discount">-25%</li>
                                                            <li class="item_mark item_new">new</li>
                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="owl-item">
                                                    <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924221/51_be7qfhil.jpg" alt=""></div>
                                                        <div class="bbb_viewed_content text-center">
                                                            <div class="bbb_viewed_price">₹30079</div>
                                                            <div class="bbb_viewed_name"><a href="#">Samsung LED</a></div>
                                                        </div>
                                                        <ul class="item_marks">
                                                            <li class="item_mark item_discount">-25%</li>
                                                            <li class="item_mark item_new">new</li>
                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="owl-item">
                                                    <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924241/8fbb415a2ab2a4de55bb0c8da73c4172--ps.jpg" alt=""></div>
                                                        <div class="bbb_viewed_content text-center">
                                                            <div class="bbb_viewed_price">₹22250</div>
                                                            <div class="bbb_viewed_name"><a href="#">Samsung Mobile</a></div>
                                                        </div>
                                                        <ul class="item_marks">
                                                            <li class="item_mark item_discount">-25%</li>
                                                            <li class="item_mark item_new">new</li>
                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="owl-item">
                                                    <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924275/images.jpg" alt=""></div>
                                                        <div class="bbb_viewed_content text-center">
                                                            <div class="bbb_viewed_price">₹1379</div>
                                                            <div class="bbb_viewed_name"><a href="#">Huawei Power</a></div>
                                                        </div>
                                                        <ul class="item_marks">
                                                            <li class="item_mark item_discount">-25%</li>
                                                            <li class="item_mark item_new">new</li>
                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="owl-item">
                                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924361/21HmjI5eVcL.jpg" alt=""></div>
                                                        <div class="bbb_viewed_content text-center">
                                                            <div class="bbb_viewed_price">₹225<span>₹300</span></div>
                                                            <div class="bbb_viewed_name"><a href="#">Sony Power</a></div>
                                                        </div>
                                                        <ul class="item_marks">
                                                            <li class="item_mark item_discount">-25%</li>
                                                            <li class="item_mark item_new">new</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="owl-item">
                                                    <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924241/8fbb415a2ab2a4de55bb0c8da73c4172--ps.jpg" alt=""></div>
                                                        <div class="bbb_viewed_content text-center">
                                                            <div class="bbb_viewed_price">₹13275</div>
                                                            <div class="bbb_viewed_name"><a href="#">Speedlink Mobile</a></div>
                                                        </div>
                                                        <ul class="item_marks">
                                                            <li class="item_mark item_discount">-25%</li>
                                                            <li class="item_mark item_new">new</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->

                    <!-- ends -->


                    {{-- <div class="trending">
                        <h2 class="title">Top picks for you</h2>
                        <div id="recommended-items" class="limit-width"></div>
                        <!-- <form action="/index" data-ajax="true" data-ajax-method="post" data-ajax-mode="replace" data-ajax-success="initSlider(&#39;#recommended-items&#39;)" data-ajax-update="#recommended-items" data-ajax-url="/widgets/recommendedcarousel/getrecommendedlist?itemsToShow=10"
                            id="RecommendedProductsAsyncForm" method="post"></form> -->
                    </div>
                    <div class="customer">
                        <div class="limit-width">
                            <div class="c2-6-of-12">
                                <div class="limit-width">
                                    <div class="img-section c4-3-of-12">
                                        <img class="lazy-img" src="{{ asset('public/frontend/img/dollars.svg') }}" alt="" width="100" height="100">
                                    </div>
                                    <div class="c4-9-of-12">
                                        <div>
                                            <div class="serif title">Earn points. Save money.</div>
                                            <div>
                                                Earn one point for every dollar you spend with us and start saving on all future purchases.
                                            </div>
                                            <div>
                                                <a class="btn-type-2 ga-cta" href="#" aria-label="Join loyalty program">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c2-6-of-12">
                                <div>
                                    <div class="img-section c4-3-of-12">
                                        <img class="lazy-img" src="{{ asset('public/frontend/img/wholesale.svg') }}" alt="" width="100" height="100">
                                    </div>
                                    <div class="c4-9-of-12">
                                        <div>
                                            <div class="serif title">
                                                Reseller? Buy Wholesale <span class="ext-text">Perfume</span>
                                            </div>
                                            <div>If you have a store or sell perfume online, register to buy wholesale perfume.
                                            </div>
                                            <div>
                                                <a class="btn-type-2 ga-cta" href="" aria-label="Register for wholesale">Register Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="xfactor-wrapper">
                    <div class="limit-width">
                        <div>
                            <div class="serif title">The <span>x</span> Factor</div>
                            <div>The FragranceX Difference</div>
                            <div class="c3-6-of-12 c4-3-of-12 section-wrapper">
                                <div class="section">
                                    <div class="img-block">
                                        <img src="{{ asset('public/frontend/img/fastfreeshipping.svg') }}" alt="" class="lazy-img" width="60" height="60">
                                    </div>
                                    <div class="text-block">
                                        <div>Same Day Free Shipping</div>
                                        <div>Orders ship on the day that you place them and arrive within days.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c3-6-of-12 c4-3-of-12  section-wrapper">
                                <div class="section">
                                    <div class="img-block">
                                        <img src="https://img.fragrancex.com/images/assets/icons/trusted.svg" alt="" class="lazy-img" width="60" height="60">
                                    </div>
                                    <div class="text-block">
                                        <div>Trusted since 2001</div>
                                        <div>100% authentic fragrances. You won't find knockoffs or imitations here.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c3-6-of-12 c4-3-of-12  section-wrapper">
                                <div class="section">
                                    <div class="img-block">
                                        <img src="https://img.fragrancex.com/images/assets/icons/safesecure.svg" alt="" class="lazy-img" width="60" height="60">
                                    </div>
                                    <div class="text-block">
                                        <div>Safe & Secure Checkout</div>
                                        <div>100% safe and secure checkout. Your information is protected.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c3-6-of-12 c4-3-of-12  section-wrapper">
                                <div class="section">
                                    <div class="img-block">
                                        <img src="https://img.fragrancex.com/images/assets/icons/fivestar.svg" alt="" class="lazy-img" width="60" height="60">
                                    </div>
                                    <div class="text-block">
                                        <div>5 Star Customer Ratings</div>
                                        <div>Over 20 million satisfied customers.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="home-content" class="c-12-of-12 std-side-padding">
                    <div class="limit-width">
                        {{-- <div class="shop-our-links">
                            <a class="link-2" href="#">Shop Our Links &gt;&gt;</a>
                        </div> --}}
                        <div class="">
                            <div class="span">
                                <h2 class="h3">Shop the Best Perfume Store Online</h2>
                                At FragranceX.com, our mission is to provide you with the largest selection of perfumes and colognes at the lowest prices.
                            </div>
                            {{-- <span id="home-content-read-more-trigger">
                               <a href="#">Read More</a>
                            </span> --}}
                            <div id="home-content-read-more-content">
                                Our discount fragrance selection consists of more than 9,500 brands of&nbsp;<a href="https://www.a.com/products/_cid_perfume__category.html" target="_blank">perfume</a>,&nbsp;<a href="https://www.a.com/products/_cid_cologne__category.html"
                                    target="_blank">cologne</a>, body lotion, and aftershave, including many discontinued perfumes and colognes. You'll find popular designer brands like Calvin Klein, Dolce &amp; Gabbana, Versace, Gucci, Elizabeth Arden, and
                                many more in our inventory at up to 80% off! And when you shop for perfumes and colognes online, you can shop with confidence: We guarantee the authenticity of every product we sell.
                                <br /><br /> As America's largest fragrance outlet, we take pride in offering a wide selection of the best perfume for women and men at the best prices. Stock up on your signature scent, or try new ones with our selection
                                of&nbsp;
                                <a href="#" target="_blank">sample sizes</a>. Not only do we carry the latest in perfume and cologne and all of your favorite best-sellers, but we also have plenty of hard-to-find and unexpected options that you'll love.
                                If you had a favorite women's fragrance in the&nbsp;<a href="https://www.si.edu/spotlight/health-hygiene-and-beauty/fragrance" target="_blank">past</a>&nbsp;that you haven't been able to find in any perfume stores near
                                you, it's likely that you'll be able to rediscover it here! We're also the best perfume shop for people searching for the perfect gift for a loved one. Browse our selection of&nbsp;
                                <a href="https://www.a.com/products/giftsets.html" target="_blank">gift sets</a>&nbsp;to find affordable perfumes and colognes that they're sure to love!
                                <h2 class="h3">Buy Your Favorite Fragrance and Earn Extra Savings</h2>
                                Our customers turn to us time and time again when they want premium perfumes and colognes at great prices, and we love to reward that loyalty. Just sign up for our rewards program and you'll be able to earn points with every order, which you can use to
                                get even deeper discounts on name-brand fragrances. You can also sign up for our coupon list to get our best deals sent right to your email. And to make your shopping experience even better, we've partnered with Klarna
                                so you can buy all of the fragrances you love and pay over time. We also welcome wholesale orders: If you're a reseller, we invite you to create a wholesale account with us to gain access to our reseller pricing.
                                <h2 class="h3">Frequently Asked Questions</h2>
                                <h2 class="h3">What Are the Top Ten Most Popular Perfumes?</h2>
                                The most popular perfume for women will change from season to season and even week to week, but some of our most popular perfumes include:
                                <ul>
                                    <li><a href="https://www.a.com/products/_cid_perfume-am-lid_b-am-pid_61100w__products.html" target="_blank">Bright Crystal</a></li>
                                    <li><a href="https://www.a.com/products/_cid_perfume-am-lid_l-am-pid_884w__products.html" target="_blank">Light Blue</a></li>
                                    <li><a href="https://www.a.com/products/_cid_perfume-am-lid_e-am-pid_352w__products.html" target="_blank">Eternity</a></li>
                                    <li><a href="https://www.a.com/products/_cid_perfume-am-lid_j-am-pid_67930w__products.html" target="_blank">Jimmy Choo</a></li>
                                    <li><a href="https://www.a.com/products/_cid_perfume-am-lid_r-am-pid_1099w__products.html" target="_blank">Red Door</a></li>
                                    <li><a href="https://www.a.com/products/_cid_perfume-am-lid_p-am-pid_60332w__products.html" target="_blank">Pink Sugar</a></li>
                                    <li><a href="https://www.a.com/products/_cid_perfume-am-lid_o-am-pid_1002w__products.html" target="_blank">Obsession</a></li>
                                    <li><a href="https://www.a.com/products/_cid_perfume-am-lid_w-am-pid_1349w__products.html" target="_blank">White Diamonds</a></li>
                                    <li><a href="https://www.a.com/products/_cid_perfume-am-lid_b-am-pid_1698w__products.html" target="_blank">Burberry Brit</a></li>
                                    <li><a href="https://www.a.com/products/_cid_perfume-am-lid_a-am-pid_60682w__products.html" target="_blank">Alien</a></li>
                                </ul>
                                <h2 class="h3">What Is the Best Website to Buy Perfume?</h2>
                                FragranceX.com is the best place to buy perfume for women as well as discount cologne. You'll find the most popular perfume brands at amazingly low prices here, and we guarantee that every women's&nbsp;<a href="https://www.ogleschool.edu/blog/what-goes-into-a-great-perfume/"
                                    target="_blank">fragrance</a>&nbsp;we sell is authentic. You can also take advantage of free shipping and earn extra discounts with our rewards program. Other discount perfume websites can't compare to our deals!
                                <h2 class="h3">How Can I Get Discounted Perfume?</h2>
                                It's easy to get discount perfume and cologne when you shop with FragranceX.com: Our prices are up to 80% off of those you'll find at any other perfume outlet! The best perfume sale at a brick-and-mortar store can't compare to our prices.
                                <h2 class="h3">Does FragranceX Sell Fake Perfume?</h2>
                                Absolutely not! You can only buy original perfumes here: We guarantee that all products in our store are 100% genuine designer fragrances. If you're not satisfied with your purchase, just send it back and we'll give you a refund. We're a trusted source
                                of high-quality, inexpensive ladies' and men's fragrances with stellar reviews all over the Internet, and we intend to keep it that way.
                                <h2 class="h3">Is it Safe to Buy Perfume Online?</h2>
                                It's safe to buy perfume online when you buy from FragranceX.com. We guarantee the authenticity of our products, and your information is always kept 100% secure. You can shop worry-free when you order perfumes online from us!
                                <h2 class="h3">Where Is FragranceX Based?</h2>
                                We're located in Hauppauge, New York, in the middle of Long Island.
                                <h2 class="h3">How Do I Contact FragranceX?</h2>
                                You can&nbsp;<a href="https://www.a.com/customerservice/contact.html" target="_blank">contact</a>&nbsp;our customer service staff by emailing <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4714323737283533070135262035262924221f6924282a">[email&#160;protected]</a>                                or calling us at 1-888-557-3738. If you're outside the United States, you can call us at 001-718-482-6970.
                                <br /><br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- main sec  ends-->
@endsection