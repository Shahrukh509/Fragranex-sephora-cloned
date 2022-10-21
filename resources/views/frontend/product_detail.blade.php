@extends('frontend.layouts.master')
@section('title')
{{ $category->title?? 'No Title' }}
@endsection
@section('meta_title')
{{ $category->meta_title?? 'No MetaTitle' }}
@endsection
@section('meta_description')
{{ $category->meta_description?? 'No MetaDescription' }}
@endsection
@section('meta_keyword')
{{ $category->meta_keyword?? 'No MetaKeyword' }}
@endsection

@section('content')
 <!-- main sec -->

 <div role="main" id="content">
            <section class="product_details">
                <div class="product-page std-side-padding" itemscope="" itemtype="https://schema.org/ItemPage">
                    <div id="bread-crumb">
                        <span itemscope="" itemtype="">
                        <span class="" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="1">
                            <a itemprop="item" href="" class="link-6">
                                <span itemprop="name">Home</span>
                        </a>
                        </span>
                        @if(isset($span))
                        @foreach($span as $span)
                        <span class="">
                            &gt;
                        </span>
                        <span class="" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <meta itemprop="position" content="2">
                            <a itemprop="item" href="/products/allbrands.html" class="link-6">
                                <span itemprop="name">{{ $span??'' }}</span>
                        </a>
                        </span>
                        @endforeach
                        @endif
                        
                        </span>
                    </div>
                    @if(isset($product))
                    <div itemscope="" itemtype="https://schema.org/Product">
                        <div class="products-container">
                            <meta itemprop="productID" content="884W">
                            <div itemprop="offers" itemtype="https://schema.org/AggregateOffer" itemscope="">
                                <meta itemprop="lowPrice" content="4682.07">
                                <meta itemprop="highPrice" content="12175.03">
                                <meta itemprop="priceCurrency" content="ARS">
                            </div>
                            <div class="product-header c4-8-of-12">
                                <div class="product-information">
                                    <div class="title c-12-of-12">
                                        <meta class="ga-product-name" itemprop="name" content="">
                                        <h1 class="product-header-name">
                                            <span class="perfume-name serif product-name-short">
                                       
                                            {{ $product->brand->name??'' }} {{ $product->name??'' }}
                                            {{  $product->category->parent->name??'' }} for {{ $product->category->name??'' }}
                                            
                                        </span>
                                        </h1>
                                        <div class="brand-name">
                                            By <a class="link-1 ga-product-brand" href="{{ route('front.product.show',[$product->brand->slug??'']) }}">{{ $product->brand->name??'' }}</a> for {{ $product->category->name??'' }}
                                        </div>
                                        <meta itemprop="brand" content="">
                                    </div>
                                </div>
                            </div>
                            <div class="c4-4-of-12 product-video pi">
                                <div class="product-img-container product-hero">
                                    <picture>
                                        <source srcset="{{ asset($product->image->path??'') }}" type="image/webp">
                                        <img itemprop="image" width="295" height="295" src="{{ asset($product->image->path??'') }}" alt="{{ $product->name??'' }}">
                                    </picture>
                                </div>
                                <a class="play-review mq2show-block" href="#watch-review">
                                    <img src="https://img.fragrancex.com/images/assets/ui/button_play.svg" width="30" height="30" aria-label="Click to scroll to the video review" alt="Play">
                                    <span>
                                    Watch Our Review
                                </span>
                                </a>
                                <div class="mq2none mobile-review c-12-of-12">
                                    <div>
                                        <div class="pr-stars">
                                            <a href="#power-reviews-section" class="stars-total" style="width: 92%;" aria-label="Go to reviews section"></a>
                                        </div>
                                        <div class="review-count">
                                            <a href="#power-reviews-section" class="link-1">1735</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="products-instock-list c4-8-of-12">
                                <div class="product-listing page_product">

                                    <div class="size-available mq2show">
                                        <span>@if(isset($product->all_variable_products)){{ count($product->all_variable_products??'no') }} @endif sizes available</span>
                                        <div class="product-review ">
                                            <div class="pr-stars">
                                                <a aria-label="Go to reviews section" href="#power-reviews-section" class="stars-total" style="width: 92%;"></a>
                                            </div>
                                            <div class="review-count">
                                                <a href="#power-reviews-section" class="link-1">Read 1735 Reviews</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mobile-line mq2none-block bg-padding shadow">
                                        
                                    </div>
                                     @if(isset($product->all_variable_products))
                                     @foreach($product->all_variable_products as $variation)

                                    <div class="product media" id="listing-69036">
                                        <div class="product-listing-img c-5-of-12 c2-3-of-12 pop">
                                            <picture>
                                                <source srcset="{{ asset($product->image->path??'') }}" type="image/webp">
                                                <img alt="{{ $product->name??'' }}" height="250" width="250" src="{{ asset($product->image->path??'') }}">
                                            </picture>
                                            <input type="radio" name="zoom-product" class="pop-trigger" aria-label="Click to zoom">
                                            <div class="pop-content">
                                                <div class="zoom-container">
                                                    <div>
                                                        <div class="close-zoom desktop ">

                                                            <input type="radio" name="zoom-product" class="pop-trigger text-dark" aria-label="Close zoom">
                                                            <i class="fa fa-times" aria-hidden="true"></i>

                                                        </div>
                                                        <picture class="">
                                                            <source data-srcset="{{ $variation->image->path??'' }}">
                                                            <img src="https://img.fragrancex.com/images/products/sku/large/69036.jpg" data-src="https://img.fragrancex.com/images/products/sku/large/69036.jpg" alt="Light Blue Perfume by Dolce &amp; Gabbana 24 ml Eau De Toilette Spray" height="750" width="750">
                                                        </picture>
                                                        <span>
                                                        Double Tap to Zoom
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="close-zoom mobile">
                                                    <button class="btn-type-3">Back</button>
                                                    <input type="radio" name="zoom-product" class="pop-trigger" aria-label="Close zoom">
                                                </div>
                                            </div>
                                            <span class=""></span>
                                            <span class="product-sku h6">Item #{{ $variation->id }}</span>
                                        </div>
                                       
                                        <div class="listing-information c-7-of-12 c2-9-of-12 ">
                                            <div class="item-info product-info">
                                                <div class="listing-vital">
                                                    <div class="item-lhs c3-7-of-12">
                                                        <h3 class="listing-description serif h5"> 

                                                            {{-- {{dd($variation->type);}} --}}

                                                            <span>{{ $variation->size }}</span> <span class="mq2none">-</span> {{ $variation->type->name??'' }} 
                                                        </h3>
                                                        <p class="listing-sku h6">Item #{{ $variation->id }}</p>
                                                    </div>
                                                    <p class="in-stock-status serif " style="color: {{ ($variation->in_stock)? '#008500':'#FF0000' }};">{{ ($variation->in_stock)? 'In Stock':'Out Of Stock' }}</p>
                                                    @if($variation->quantity <= 20)
                                                    <div class="stk-msg c3-7-of-12"><div class="msg h5 limited ">Hurry! Only {{ $variation->quantity??'' }} in stock</div></div>
                                                    @else

                                                    @endif
                                                    
                                                    <div class="stk-msg c3-7-of-12"></div>
                                                    <div class="item-messages c3-7-of-12">
                                                    </div>
                                                    <div class="flex-separator c3-7-of-12">&nbsp;</div>
                                                    <div class="item-rhs c3-5-of-12">
                                                        <div class="listing-price h3">
                                                            <div class="listing-price-container">
                                                                <div class="price-value">
                                                                    <bdo dir="ltr"><span class="price-symbol">RS
                                                                    </span><span
                                                                        class="sale-price-val">{{ number_format($variation->price) }}</span></bdo>
                                                                </div>
                                                                {{-- Price with Coupon --}}
                                                            </div>
                                                        </div>
                                                        <div class="additional-messages">
                                                            <p class="product-free-shipping serif">Delivery <b class="delivery-date"> 2 - 4 days</b></p>
                                                        </div>
                                                        <div class="button-container">
                                                            <div class="add-to-cart">
                                                                {{-- <form action="/orders/cart/addtocart"> --}}
                                                                    <a style="color:#302aaf" type="submit" class=" btn btn-primary text-white addCart" id="{{ $variation->id }}" url="{{ route('front.add.to.cart',[$variation->id]) }}">Add To
                                                                    Cart</a>
                                                                    
                                                               {{--  </form> --}}
                                                            </div>
                                                            {{-- <div class="add-coupon">
                                                                <button class="btn-type-2 get-coupon">Get 15% Off</button>
                                                            </div> --}}
                                                            <div class="additional-messages">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listing-information-22">
                                            <div class="button-container listing-buttons c3-5-of-12 mq3none-block">
                                                <div class="add-to-cart">
                                                    <form action="/orders/cart/addtocart">
                                                        <button type="submit" class="btn-type-2">Add To Cart</button>
                                                        <input type="hidden" value="69036" name="productCode">
                                                    </form>
                                                </div>
                                                <div class="add-coupon">
                                                    <button class="btn-type-2 get-coupon">Get 15% Off</button>
                                                </div>
                                                <div class="additional-messages">
                                                </div>
                                            </div>
                                            <div class="schema" itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                                                <meta itemprop="price" content="4682.07">
                                                <meta itemprop="priceCurrency" content="ARS">
                                                <meta itemprop="availability" content="https://schema.org/InStock">
                                                <meta itemprop="itemCondition" content="https://schema.org/NewCondition">
                                                <meta itemprop="url" content="https://www.a.com/products/_cid_perfume-am-lid_l-am-pid_884w__products.html?sid=69036">
                                            </div>
                                    
                                        <div class="mobile-line mq2none-block bg-padding"></div>
                                        <input type="hidden" class="ga-item-model" value="{&quot;NameShort&quot;:&quot;Light Blue&quot;,&quot;UnitPrice&quot;:5508.32,&quot;Brand&quot;:&quot;Dolce &amp; Gabbana&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:&quot;Eau De Toilette Spray&quot;,&quot;Size&quot;:&quot;24 ml&quot;,&quot;AutoSku&quot;:&quot;418223&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;884W&quot;}">
                                    </div>
                                 
                                    
                                    </div>
                                      @endforeach
                                      @endif()


                                    
                                    <div class="spacer"></div>
                                </div>
                            </div>


                           {{--  <div id="ReccomendedForYou" class="shop-sliders bg-padding c-12-of-12 ">
                                <div>
                                    <div>
                                        <form action="/widgets/recommendedcarousel/getrecommendedcarousel?itemsToShow=6&amp;parentCode=884W&amp;category=Perfume" data-ajax="true" data-ajax-method="get" data-ajax-mode="replace" data-ajax-success="initSlider('#AjaxRecommendedCarousel')" data-ajax-update="#AjaxRecommendedCarousel"
                                            id="AjaxReccomendedCarouselForm" method="post"></form>
                                        <div id="AjaxRecommendedCarousel"></div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="x-factor c-12-of-12 c4-4-of-12 bg-padding ">
                                <div class="xfactor-wrapper">
                                    <div class="limit-width">
                                        <div>
                                            <div class="serif title">The <span>x</span> Factor</div>
                                            <div>The FragranceX Difference</div>
                                            <div class="c3-6-of-12 c4-3-of-12 section-wrapper">
                                                <div class="section">
                                                    <div class="img-block">
                                                        <img src="https://img.fragrancex.com/images/assets/icons/fastfreeshipping.svg" data-src="https://img.fragrancex.com/images/assets/icons/fastfreeshipping.svg" alt="" class="" width="60" height="60">
                                                    </div>
                                                    <div class="text-block">
                                                        <div>Same Day Free Shipping</div>
                                                        <div>Orders ship on the day that you place them and arrive within days.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c3-6-of-12 c4-3-of-12  section-wrapper">
                                                <div class="section">
                                                    <div class="img-block">
                                                        <img src="https://img.fragrancex.com/images/assets/icons/trusted.svg" data-src="https://img.fragrancex.com/images/assets/icons/trusted.svg" alt="" class="" width="60" height="60">
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
                                                        <img src="https://img.fragrancex.com/images/assets/icons/safesecure.svg" data-src="https://img.fragrancex.com/images/assets/icons/safesecure.svg" alt="" class="" width="60" height="60">
                                                    </div>
                                                    <div class="text-block">
                                                        <div>Safe &amp; Secure Checkout</div>
                                                        <div>100% safe and secure checkout. Your information is protected.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c3-6-of-12 c4-3-of-12  section-wrapper">
                                                <div class="section">
                                                    <div class="img-block">
                                                        <img src="https://img.fragrancex.com/images/search-loading.gif" data-src="https://img.fragrancex.com/images/assets/icons/fivestar.svg" alt="" class="lazy-img" width="60" height="60">
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
                            </div>
                            
                        </div>
                        <div class="lazy-form-trigger lazyloadPrevViewItems" data-triggernames="PreviousViewedAsyncForm AjaxReccomendedCarouselForm AlsoBoughtAsyncForm
    " style="position: absolute; top: 70em;">
                        </div>
                        <div class="product-extra-info">
                            <div class="watch-review c4-8-of-12 c5-7-of-12" id="watch-review">
                                <div class="serif h2">
                                    Watch Our Review
                                    <div class="video-back-to-top">
                                        <a href="#header">
                                            <i class="fa fa-caret-up float-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <input class="product-video-async-html" id="productVideoAsyncHtml" name="productVideoAsyncHtml" type="hidden" value="<iframe src=&quot;https://fast.wistia.net/embed/iframe/9ha6616g77?autoPlay=true&amp;endVideoBehavior=reset&amp;playerColor=21165e&amp;version=v1&amp;volumeControl=true&amp;plugin[captions-v1][onByDefault]=true&quot; allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen scrolling=&quot;no&quot; class=&quot;wistia_embed&quot; name=&quot;wistia_embed&quot;></iframe>">
                                <div class="review-video" itemscope="" itemtype="https://schema.org/VideoObject">


                                    <img src="https://img.fragrancex.com/images/search-loading.gif" data-src="https://embed-ssl.wistia.com/deliveries/efec1cb948351af4195c13ac00f9dd9c16b4a1f1.jpg" alt="video" class="lazy-img" width="300" height="300">
                                    <noscript>


                                    <img src="https://embed-ssl.wistia.com/deliveries/efec1cb948351af4195c13ac00f9dd9c16b4a1f1.jpg"
                                        itemprop="thumbnailUrl" alt="video" />
                                </noscript>
                                    <iframe src="{{ $product->video??'' }}" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" oallowfullscreen="" msallowfullscreen="" scrolling="no" class="wistia_embed" name="wistia_embed">
                                        

                                    </iframe>
                                    </div>
                               {{--  <div class="pop">
                                    <input type="checkbox" name="VideoTranscript" class="pop-trigger" aria-label="Read video transcript">
                                    <span class="link-1 show-content">Read the Transcript</span>
                                    <div class="pop-content">
                                        Hi, I'm Sarah. And today I'm reviewing Light Blue by Dolce and Gabbana. I love this perfume. It smells great, and it's not too overpowering. I mean, you can wear it day or night, because it has a nice, clean, fresh scent to it. And it has amber, white
                                        rose, and bergamot, and other yummy scents in it. I personally would wear this in the summer. And I think you should really try it out. We have it ready to ship, and you might even get free shipping. That's it for now.
                                        Don't forget to like us on Facebook and Twitter and subscribe to our YouTube channel for more reviews on your favorite products.
                                    </div>
                                    <span class="link-1 hide-content">Hide Transcript</span>
                                </div> --}}
                            </div>
                            <div class="about-brand c4-4-of-12 c5-5-of-12">
                                <div class="h2">About {{ $product->brand->name??'' }}</div>
                                <div>
                                    <div itemprop="Description" class="show-content">{{ $product->brand->description??'' }}<a href="{{ route('front.product.show',[$product->brand->slug]) }}"
                                            class="link-1"> Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-sliders bg-padding c-12-of-12">
                            <div>
                                <div id="OtherFragrances">
                                    <div id="OtherFragrancesAsyncSection">
                                        <h3 class="title serif">Other Fragrances by {{ $product->brand->name??'' }}</h3>
                                        <div class="slider">
                                            <div class="slider-wrapper">
                                                <div class="slider-content">
                                                    @foreach($product->brand->product as $item)
                                                    <div class="content-container">
                                                        
                                                        <div class="content slide-0">
                                                            <a href="{{ route('front.product.show',[$product->brand->slug,$item->slug]) }}">
                                                                <div>
                                                                    <picture class="lazy-img">
                                                                        <source data-srcset="{{ $item->image->path??'' }}">
                                                                        <img src="{{ $item->image->path??'' }}" width="206" height="206" alt="{{ $item->name??'' }}">
                                                                    </picture>
                                                                </div>
                                                                <div class="desc-section">
                                                                    <div class="serif h3">
                                                                        {{ $item->name??'' }}
                                                                    </div>
                                                                    <div>
                                                                        By {{ $product->brand->name??'' }}
                                                                    </div>
                                                                   <div class="product-review ">
                                                                        <div class="p-w-r">
                                                                        <div class="pr-stars">
                                                                        <div class="stars-total" style="width: 92%;"></div>
                                                                        </div>
                                                                        <div class="review-count">
                                                                        (<span>646</span>)
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slider-price">
                                                                        <span>As low as</span> <bdo dir="ltr">RS
                                                                        {{ number_format($item->min_price) }}</bdo>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                       
                                                    </div>
                                                     @endforeach
                                                </div>
                                            </div>
                                            <div class="slider-nav">
                                                <div class="prev" disabled="disabled">
                                                    <button disabled="disabled" data-slide="-1" class="review-nav">
                                                    <img class="prev lazy-img"
                                                        src="https://img.fragrancex.com/images/search-loading.gif"
                                                        data-src="https://img.fragrancex.com/images/assets/ui/sliderleft.svg"
                                                        alt="View Previous Items" width="50" height="50"
                                                        disabled="disabled">
                                                </button>
                                                </div>
                                                <div class="next">
                                                    <button data-slide="1" class="review-nav">
                                                    <img class="next" src="https://img.fragrancex.com/images/assets/ui/sliderleft.svg" data-src="https://img.fragrancex.com/images/assets/ui/sliderleft.svg" width="50" height="50" alt="View Next Items">
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div id="AlsoBoughtAsyncSection">
                                        <h3 class="title serif">Customers also liked</h3>
                                        <div class="slider">
                                            <div class="slider-wrapper">
                                                <div class="slider-content">
                                                    @php
                                                    $all = \App\Models\Product::where('status',1)->get();
                                                    @endphp
                                                    @foreach($all as $one)
                                                    <div class="content-container">
                                                        <div class="content slide-0">
                                                            <a href="{{ route('front.product.show',[$one->brand->slug,$one->slug]) }}" class="click-box">
                                                                <div>
                                                                    <picture class="lazy-img">
                                                                        <source data-srcset="{{ $one->image->path??'' }}" type="image/webp">
                                                                        <img src="{{ $one->image->path??'' }}" width="206" height="206" alt="Bright Crystal">
                                                                    </picture>
                                                                </div>
                                                                <div class="desc-section">
                                                                    <div class="serif h3">
                                                                        {{ $one->name??'' }}
                                                                    </div>
                                                                    <div>
                                                                        By {{ $one->brand->name??'' }}
                                                                    </div>
                                                                    <div class="product-review ">
                                                                        <div class="p-w-r">
                                                                        <div class="pr-stars">
                                                                        <div class="stars-total" style="width: 92%;"></div>
                                                                        </div>
                                                                        <div class="review-count">
                                                                        (<span>646</span>)
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slider-price">
                                                                        <span>As low as</span> <bdo dir="ltr">RS {{ number_format($one->min_price) }} </bdo>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            
                                            <div class="slider-nav">
                                                <div class="prev" disabled="disabled">
                                                    <button disabled="disabled" data-slide="-1" class="review-nav">
                                                    <img class="next" src="https://img.fragrancex.com/images/assets/ui/sliderleft.svg" data-src="https://img.fragrancex.com/images/assets/ui/sliderleft.svg" width="50" height="50" alt="View Next Items">
                                                </button>
                                                </div>
                                                <div class="next">
                                                    <button data-slide="1" class="review-nav">
                                                    <img class="next" src="https://img.fragrancex.com/images/assets/ui/sliderleft.svg" data-src="https://img.fragrancex.com/images/assets/ui/sliderleft.svg" width="50" height="50" alt="View Next Items">
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-12-of-12 product-specifications-wrapper" id="ProductSpecificationsSection">
                            <div class="c-12-of-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Attribute Name</th>
                                            <th>Attribute Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Brand
                                            </td>
                                            <td>
                                                {{ $product->brand->name??'' }}
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Fragrance Family
                                            </td>
                                            <td>
                                                --
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Fragrance Name
                                            </td>
                                            <td>
                                                {{ $product->name??'' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Fragrance Classification
                                            </td>
                                            <td>
                                                {{ $product->type->name??'' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Volume
                                            </td>
                                            <td>

                                                Available in @foreach($product->all_variable_products as $size){{ $size->size.', ' }} @endforeach
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Top Notes
                                            </td>
                                            <td>
                                                Sicilian Lemon, Apple, Cedar, Bellflower
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Heart Notes
                                            </td>
                                            <td>
                                                Bamboo, Jasmine, White Rose
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Base Notes
                                            </td>
                                            <td>
                                                Cedar, Musk, Amber
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Gender
                                            </td>
                                            <td>
                                                {{ $product->category->name??'' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Ingredients
                                            </td>
                                            <td>
                                                Alcohol, Fragrance, Water, Limonene, Ethylhexyl Methoxycinnamate, Diethylamino Hydroxybenzoyl Hexyl Benzoate, Citral, Cinnamal, Linalool, Bht.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Product Form
                                            </td>
                                            <td>
                                                Liquid
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Year Of Launch
                                            </td>
                                            <td>
                                                2001
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Strength
                                            </td>
                                            <td>
                                                Strong
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Sustainable
                                            </td>
                                            <td>
                                                Regular
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="power-reviews-section " id="power-reviews-section">
                            <div class="reviews">
                                <div class="h2 serif review-header">Customer Reviews</div>
                                <div class="summary-container">
                                    <div itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating" class="review-snippet c4-4-of-12">
                                        <div itemprop="ratingValue" class="h2 serif header-large">4.7</div>
                                        <div class="stars-container">
                                            <div class="pr-stars">
                                                <div class="stars-total" style="width:92%;"></div>
                                            </div>
                                        </div>
                                        <div itemprop="reviewCount" content="1735" class="review-count">1735 Reviews</div>
                                        <a class="btn-type-2 write-review" href="#">Write a Review</a>
                                        <input type="hidden" name="write-review-url" value="/products/review.html?pageid=884W">
                                    </div>
                                    <div class="recommended c2-4-of-12 c4-4-of-12">
                                        <div>
                                            <div class="h2 serif header-large">
                                                <img class="lazy-img" alt="" src="https://img.fragrancex.com/images/search-loading.gif" width="30" height="30" data-src="https://img.fragrancex.com/images/assets/ui/pr_checkmark.svg"> 94%
                                            </div>
                                            <div>of respondants would recommend this to a friend</div>
                                        </div>
                                    </div>
                                    <div class="histogram c2-8-of-12 c4-4-of-12">
                                        <div>
                                            <div class="filter-by-score" data-reviews="1383" data-filter="5">
                                                <span>5 stars</span>
                                                <div class="bar-container">
                                                    <div class="bar" style="width: 80%;"></div>
                                                </div>
                                                <span>1383</span>
                                            </div>
                                            <div class="filter-by-score" data-reviews="225" data-filter="4">
                                                <span>4 stars</span>
                                                <div class="bar-container">
                                                    <div class="bar" style="width: 13%;"></div>
                                                </div>
                                                <span>225</span>
                                            </div>
                                            <div class="filter-by-score" data-reviews="57" data-filter="3">
                                                <span>3 stars</span>
                                                <div class="bar-container">
                                                    <div class="bar" style="width: 4%;"></div>
                                                </div>
                                                <span>57</span>
                                            </div>
                                            <div class="filter-by-score" data-reviews="21" data-filter="2">
                                                <span>2 stars</span>
                                                <div class="bar-container">
                                                    <div class="bar" style="width: 2%;"></div>
                                                </div>
                                                <span>21</span>
                                            </div>
                                            <div class="filter-by-score" data-reviews="49" data-filter="1">
                                                <span>1 stars</span>
                                                <div class="bar-container">
                                                    <div class="bar" style="width: 3%;"></div>
                                                </div>
                                                <span>49</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="face-off-container">
                                    <div class="c2-6-of-12">
                                        <div>
                                            Most Liked Positive Review
                                        </div>
                                        <div class="stars-container">
                                            <div class="pr-stars">
                                                <div class="stars-total" style="width: 100%;"></div>
                                            </div>
                                            <span>
                                            5
                                        </span>
                                        </div>
                                        <div>
                                            <p class="h3">Mediterranean Citrus Sky</p>
                                            <div class="pop">
                                                <span>
                                                It's a gorgeous, sunny, blue sky day on the mediterraean coast, across from
                                                you is a woman selling fresh lemons and soft pink roses, the smell of cedar
                                                wafts by ever so lightly, and there is a lovely lightly powdered sugar scent
                                                coming from the bakery next door. That's Light Blue- summery, fresh </span>
                                                <div class="read-more-container">
                                                    <input type="checkbox" name="PositiveReadMore" class="pop-trigger" aria-label="Read more positive review">
                                                    <span class="read-more">...</span>
                                                    <span class="link-1 read-more">Read Complete Review</span>
                                                    <div class="pop-content">
                                                        and lightly sweet, with just enough dry cedar to keep you grounded. Lovely.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span>
                                    vs.
                                </span>
                                    <div class="c2-6-of-12">
                                        <div>
                                            Most Liked Negative Review
                                        </div>
                                        <div class="stars-container">
                                            <div class="pr-stars">
                                                <div class="stars-total" style="width: 60%;"></div>
                                            </div>
                                            <span>
                                            3
                                        </span>
                                        </div>
                                        <div>
                                            <p class="h3">Not exactly what I hoped for</p>
                                            <div class="pop">
                                                <span>
                                                I bought this for my daughter-in-law and thought I would try it myself. In
                                                the beginning, it smelled good and I was enjoying it, even though it didn't
                                                stay with me very long. Now, I've noticed that the fragrance smells totally
                                                different and almost tangy. I also bought the body lotion but so far </span>
                                                <div class="read-more-container">
                                                    <input type="checkbox" name="NegativeReadMore" class="pop-trigger" aria-label="Read more negative review">
                                                    <span class="read-more">...</span>
                                                    <div class="pop-content">
                                                        the smell hasn't changed. I don't think this perfume agrees with my body chemistry, but on someone else it might be great. I'll probably pass it on to my daughter-in-law, since it is her favorite fragrance.
                                                    </div>
                                                    <span class="link-1 read-more">Read Complete Review</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="review-list">
                                    <div class="reviews-list">
                                        <div>
                                            <div class="c-6-of-12">
                                                <span class="h3 total-reviews">1735</span>
                                                <span class="h3">Reviews</span>
                                            </div>
                                            <div class="c-6-of-12 reviews-select-container select-container lazy-img">
                                                <select id="review-sort">
                                                <optgroup label="Sort reviews by:">
                                                    <option value="Newest" selected="">Most Recent</option>
                                                    <option value="MostHelpful">Most Helpful</option>
                                                    <option value="LowestRating">Lowest Rated</option>
                                                    <option value="HighestRating">Highest Rated</option>
                                                    <option value="Oldest">Oldest</option>
                                                </optgroup>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="customer-reviews">
                                            <div itemprop="review" itemscope="" itemtype="https://schema.org/Review" class="review">
                                                <div itemprop="itemReviewed" itemscope="" itemtype="https://schema.org/Thing">
                                                    <meta itemprop="name" content="Light Blue Perfume">
                                                </div>
                                                <div itemprop="reviewRating" itemscope="" itemtype="https://schema.org/Rating" class="stars-container">
                                                    <div class="pr-stars">
                                                        <div class="stars-total" style="width: 100%;"></div>
                                                    </div>
                                                    <meta itemprop="worstRating" content="0">
                                                    <span itemprop="ratingValue" class="rating">5</span>
                                                    <meta itemprop="bestRating" content="5">
                                                </div>
                                                <div class="c3-6-of-12 review-text">
                                                    <div>
                                                        <p itemprop="name" class="h3 headline">I would buy again</p>
                                                        <p itemprop="reviewBody" class="comment">In the morning before I go to work.
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <p class="h3">Bottom Line</p>
                                                        <p class="bottom-line">Yes, I would recommend to a friend.</p>
                                                    </div>
                                                </div>
                                                <div class="thumbs-container c3-4-of-12">
                                                    <p>Was this review helpful to you?</p>
                                                    <div data-comment-id="422507411">
                                                        <button class="review-vote" data-value="helpful">
                                                        <img class="lazy-img" aria-label="Click to like this review"
                                                            src="https://img.fragrancex.com/images/search-loading.gif"
                                                            data-src="https://img.fragrancex.com/images/powerreviews/vote-like.svg"
                                                            width="20" height="20" alt="like">
                                                        <span class="helpful-votes">0</span>
                                                    </button>
                                                        <button class="review-vote" data-value="unhelpful">
                                                        <img class="lazy-img" aria-label="Click to like this review"
                                                            src="https://img.fragrancex.com/images/search-loading.gif"
                                                            data-src="https://img.fragrancex.com/images/powerreviews/vote-dislike.svg"
                                                            width="20" height="20" alt="dislike">
                                                        <span class="unhelpful-votes">0</span>
                                                    </button>
                                                    </div>
                                                </div>
                                                <div class="c3-2-of-12">
                                                    <div>
                                                        <span class="h6">Date</span>
                                                        <span itemprop="datePublished" content="8/30/2022" class="h5 date">8/30/2022</span>
                                                    </div>
                                                    <div>
                                                        <span class="h6">By</span>
                                                        <span itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                                        <span itemprop="name" class="h5 author">BD</span>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="h6">From</span>
                                                        <span class="h5 location">Pierre, SD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        <div class="pagination-sect">
                                            <div class="pagination">
                                                <span>
                                                <a href="#" class="link-1 reviews-link prev-pg" data-pg="-10"
                                                    style="display:none;">Prev</a>
                                            </span>
                                                <span class="page-number">
                                                <a href="#review-list" class="reviews-link selected min-page" data-pg="0">1</a>
                                                <a href="#review-list" class="reviews-link " data-pg="10">2</a>
                                                <a href="#review-list" class="reviews-link " data-pg="20">3</a>
                                                <span>...</span>
                                                <a href="#review-list" class="reviews-link  max-page" data-pg="1730">174</a>
                                                </span>
                                                <span>
                                                <a href="#review-list" class="link-1 reviews-link next-pg"
                                                    data-pg="10">Next</a>
                                            </span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="PageId" value="884W">
                                        <input type="hidden" name="BottomLinePositive" value="Yes, I would recommend to a friend.">
                                        <input type="hidden" name="BottomLineNegative" value="No, I would not recommend to a friend.">
                                        <input type="hidden" name="FilterScore" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <h1 class="text-danger">No product found x </h1>
                    @endif
                    <div class="shop-sliders bg-padding ">
                        <div>
                            <div>
                                <form action="/widgets/previouslyviewed/ajaxpreviouslyviewed" data-ajax="true" data-ajax-method="get" data-ajax-mode="replace" data-ajax-success="initSlider('#AjaxPreviouslyViewed')" data-ajax-update="#AjaxPreviouslyViewed" id="PreviousViewedAsyncForm"
                                    method="post"></form>
                                <div id="AjaxPreviouslyViewed"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="/products/products" data-ajax="true" data-ajax-method="post" data-ajax-mode="replace" data-ajax-update="#PreviouslyViewedAsyncSection" data-ajax-url="/products/noresponse/ajaxaddpreviouslyviewed" id="AddPreviousViewedAsyncForm" method="post">
                    <input id="name" name="name" type="hidden" value="Light Blue Perfume"><input id="parentCode" name="parentCode" type="hidden" value="884W"><input id="brand" name="brand" type="hidden" value="Dolce &amp; Gabbana"><input id="category" name="category"
                        type="hidden" value="Perfume"><input id="hasParentImg" name="hasParentImg" type="hidden" value="True"></form>
                <input id="PageCultureClass" name="PageCultureClass" type="hidden" value="">
                <div id="AfterpayPopupSection"></div>
                <form action="/products/products" data-ajax="true" data-ajax-complete="syncProductInfo" data-ajax-method="post" data-ajax-url="/widgets/syncinfo/getlatestproductinfo" id="SyncProductInfoForm" method="post"> <input type="hidden" name="ParentCode" value="884W">
                </form>
            </section>
    </div>


 
@endsection
@push('child-scripts')
<script type="text/javascript">
 
 $(document).on('click','.addCart',function(){
   
   var id = $(this).attr('id');
   var url = $(this).attr('url');

   $.ajax({
     url : url,
     data : id,
     success : function(response){

        if(response.success == true){

              const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
            });

            Toast.fire({
              icon: 'success',
              title: 'Product added to cart'
            });

            $('.add-total-items').html(response.itemsInCart);

        }else{

            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
            });

            Toast.fire({
              icon: 'error',
              title: 'Something went wrong!'
            });


        }

        }

   });

 });


</script>


@endpush