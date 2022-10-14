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
            <div id="ProductSection-product-template" class="product-template__container prstyle1 px-5 put-content-here
            put-content-here">
                <!--product-single-->
                <div class="product-single">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                            <div class="product-details-img">
                                <div class="product-thumb">
                                    <div id="gallery" class="product-dec-slider-2 product-tab-left slick-initialized slick-slider slick-vertical">
                                        <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                                        <div class="slick-list draggable" style="height: 280px;"><div class="slick-track" style="opacity: 1; height: 1512px; transform: translate3d(0px, -459px, 0px);">
                                            <div class="slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true" style="width: 51px;" tabindex="-1">
                                                <div>
                                                    <a data-image="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" data-zoom-image="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <img class="blur-up lazyloaded" src="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" alt="">
                                        </a>
                                       </div>
                                    </div>
                                    
                                <div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 51px;" tabindex="-1"><div><a data-image="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" data-zoom-image="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" class="slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <img class="blur-up ls-is-cached lazyloaded" src="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" alt="">
                                        </a></div></div>
                                        
                                        <div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 51px;" tabindex="-1"><div><a data-image="https://www.sephora.com/productimages/product/p449116-av-19-zoom.jpg?imwidth=930" data-zoom-image="https://www.sephora.com/productimages/product/p449116-av-19-zoom.jpg?imwidth=930" class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <img class="blur-up ls-is-cached lazyloaded" src="https://www.sephora.com/productimages/product/p449116-av-19-zoom.jpg?imwidth=930" alt="">
                                        </a></div></div>
                                        <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 51px;" tabindex="-1"><div><a data-image="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" data-zoom-image="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <img class="blur-up ls-is-cached lazyloaded" src="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" alt="">
                                        </a></div></div>
                                        <div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 51px;" tabindex="-1"><div><a data-image="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" data-zoom-image="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <img class="blur-up ls-is-cached lazyloaded" src="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" alt="">
                                        </a></div></div>
                                        <div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 51px;" tabindex="-1"><div><a data-image="https://www.sephora.com/productimages/product/p449116-av-19-zoom.jpg?imwidth=930" data-zoom-image="https://www.sephora.com/productimages/product/p449116-av-19-zoom.jpg?imwidth=930" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <img class="blur-up ls-is-cached lazyloaded" src="https://www.sephora.com/productimages/product/p449116-av-19-zoom.jpg?imwidth=930" alt="">
                                        </a></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 51px;" tabindex="-1"><div><a data-image="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" data-zoom-image="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <img class="blur-up ls-is-cached lazyloaded" src="https://www.sephora.com/productimages/sku/s2249696-main-zoom.jpg?imwidth=465" alt="">
                                        </a></div></div>
                                        <div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 51px;" tabindex="-1"><div><a data-image="https://www.sephora.com/productimages/product/p449116-av-19-zoom.jpg?imwidth=930" data-zoom-image="https://www.sephora.com/productimages/product/p449116-av-19-zoom.jpg?imwidth=930" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <img class="blur-up ls-is-cached lazyloaded" src="https://www.sephora.com/productimages/product/p449116-av-19-zoom.jpg?imwidth=930" alt="">
                                        </a>
                                    </div>
                                </div>
                                @foreach($product->all_variable_products->where('status',1) as $get_image)
                                   <div class="slick-slide slick-current slick-active" data-slick-index="4" aria-hidden="false" style="width: 51px;"><div><a data-image="{{ $get_image->image->path??'' }}" data-zoom-image="{{ $get_image->image->path??'' }}" class="slick-slide slick-cloned" data-slick-index="0" aria-hidden="true" tabindex="0" style="width: 100%; display: inline-block;">
                                            <img class="blur-up ls-is-cached lazyloaded" src="{{ $get_image->image->path??'' }}" alt="">
                                        </a>
                                    </div>
                                    
                                    </div>
                               @endforeach
                            </div>
                        </div>
                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
                                </div>
                                <div class="zoompro-wrap product-zoom-right pl-20">
                                    <div class="zoompro-span">
                                        <img class="blur-up zoompro lazyloaded" data-zoom-image="{{ $product->variable_products->image->path??'' }}" alt="" src="{{ $product->variable_products->image->path??'' }}">
                                    </div>
                                    <!-- <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                    <div class="product-buttons">
                                        <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                        <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows"
                                                aria-hidden="true"></i></a>
                                    </div> -->
                                </div>
                                <!-- <div class="lightboximages">
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>
                                    <a href="img/camelia-reversible0.jpg" data-size="1462x2048"></a>

                                </div> -->

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h1 class="product-single__title">{{ $product->brand->name??'' }}</h1>
                                <h6>{{ $product->name??'' }} {{ $product->type->name??'' }}</h6>
                                <div class="product-nav clearfix">
                                    <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                                <div class="prInfoRow">
                                    <div class="product-stock">@if($product->variable_products->in_stock)<span class="instock ">In Stock</span>@else<span class="outstock hide">Unavailable</span>@endif</div>
                                    <div class="product-sku">Item: <span class="variant-sku">#{{ $product->variable_products->id??'' }}</span></div>
                                    <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6
                                                reviews</span></a></div>
                                </div>
                                <p class="product-single__price product-single__price-product-template">
                                    <!-- <span class="visually-hidden">Regular price</span>
                                    <s id="ComparePrice-product-template"><span class="money">$600.00</span></s> -->
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                        <span id="ProductPrice-product-template"><span class="money">Rs {{ number_format($product->variable_products->price)??'' }}</span></span>
                                    </span>
                                    {{-- <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                    <span>get it for $109.25 (5% Off) with Auto-Replenish</span>
                                    <span id="SaveAmount-product-template" class="product-single__save-amount">
                                            <span class="money">$100.00</span>
                                    </span>
                                    <span class="off">(<span>16</span>%)</span>
                                    </span> --}}
                                </p>
                                
                                <p>Size: {{ $product->variable_products->size??'' }} {{ $product->variable_products->type->name??'' }}</p>
                            </div>



                            <div class="standard_size pb-4">
                                <div class="container">
                                    <h6>Sizes</h6>
                                    <div class="row">

                                        @foreach($product->all_variable_products->where('status',1) as $key=>$pro)

                                        

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                            <div  style="cursor: pointer;"class="perfume_box p-0 select-size {{ ($key==0)?'border-danger':'' }}" id={{ $pro->id }}>
                                                <div class="row">
                                                    
                                                    <div class="col-4">

                                                        <img src="{{ $pro->image->path??'' }}" alt="" class="img-fluid ">
                                                    </div>
                                                     
                                                    <div class="col-8 d-flex">
                                                        <span class=" ml_size">{{ $pro->size??'' }} {{ $pro->type->name??'' }}
                                                        
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                        {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                            <div class="perfume_box p-0">
                                                <div class="row">
                                                    <div class="col-4">

                                                        <img src="img/s2249688+sw-42.webp" alt="" class="img-fluid ">
                                                    </div>

                                                    <div class="col-8 d-flex">
                                                        <span class=" ml_size">1.7 oz/ 50 mL Eau de Parfum Spray
                                        
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> --}}

                                        


                                    </div>

                                    <br>
                                    {{-- <h6>Mini size</h6> --}}
                                    {{-- <div class="row  ">

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                            <div class="perfume_box p-0">
                                                <div class="row">
                                                    <div class="col-4">

                                                        <img src="img/s2249688+sw-42.webp" alt="" class="img-fluid ">
                                                    </div>

                                                    <div class="col-8 d-flex">
                                                        <span class=" ml_size">1.7 oz/ 50 mL Eau de Parfum Spray
                                    
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>




                                    </div> --}}
                                </div>


                            </div>

                            <!-- Product Action -->
                            <div class="product-action clearfix  product-template__container">
                                <div class="product-form__item--quantity ">
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);">
                                                <i class="" aria-hidden="true"></i>-</a>
                                            <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty" max="10">
                                            <a class="qtyBtn plus" href="javascript:void(0);">
                                                <i class="" aria-hidden="true">+</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-form__item--submit">
                                    <button type="button" name="add" class="btn product-form__cart-submit add-to-cart" id="{{ $product->variable_products->id??''}}"</button>
                                            <span>Add to cart</span>
                                        </button>
                                </div>
                                {{-- <div class="shopify-payment-button" data-shopify="payment-button">
                                    <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it
                                            now</button>
                                </div> --}}
                            </div>
                            <!-- End Product Action -->

                            <p id="freeShipMsg" class="freeShipMsg" data-price="199"><i class="fa fa-truck" aria-hidden="true"></i> GETTING CLOSER! ONLY <b class="freeShip"><span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span></b> AWAY FROM <b>FREE SHIPPING!</b></p>
                            <p class="shippingMsg"><i class="fa fa-clock-o" aria-hidden="true"></i> ESTIMATED DELIVERY BETWEEN <b id="fromDate">Wed. May 1</b> and <b id="toDate">Tue. May 7</b>.</p>
                            <!-- <div class="userViewMsg" data-user="20" data-time="11000"><i class="fa fa-users" aria-hidden="true"></i>
                                <strong class="uersView">14</strong> PEOPLE ARE LOOKING FOR THIS PRODUCT</div> -->
                        </div>
                    </div>
                </div>
                <!--End-product-single-->

                <!--Product Tabs-->
                <div class="tabs-listing">
                    <ul class="product-tabs d-flex">
                        <li rel="tab1" class="active"><a class="tablink">Product Details</a></li>
                        <li rel="tab2"><a class="tablink">Ingredients</a></li>
                        <li rel="tab3"><a class="tablink">How to Use</a></li>
                        <li rel="tab4"><a class="tablink">Shipping &amp; Returns</a></li>
                    </ul>
                    <div class="tab-container">
                        <div id="tab1" class="tab-content" style="display: block;">
                            <div class="product-description rte">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                    <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                    <li>Lorem Ipsum is not simply random text.</li>
                                    <li>Free theme updates</li>
                                </ul>
                                <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>
                                <p>You can change the position of any sections such as slider, banner, products, collection and so on by just dragging and dropping.&nbsp;</p>
                                <h3>Lorem Ipsum is not simply random text.</h3>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                    truth, the master-builder of human happiness.</p>
                                <p>Change colors, fonts, banners, megamenus and more. Preview changes are live before saving them.
                                </p>
                                <h3>1914 translation by H. Rackham</h3>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                    truth, the master-builder of human happiness.</p>
                                <h3>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
                                    culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
                                <p>You can use variant style from colors, images or variant images. Also available differnt type of design styles and size.</p>
                                <h3>Lorem Ipsum is not simply random text.</h3>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                    truth, the master-builder of human happiness.</p>
                                <h3>Proin ut lacus eget elit molestie posuere.</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                            </div>
                        </div>

                        <div id="tab2" class="tab-content" style="display: none;">
                            <div id="shopify-product-reviews">
                                <div class="spr-container">
                                    <div class="spr-header clearfix">
                                        <div class="spr-summary">
                                            <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i>
                                                </a><span class="spr-summary-actions-togglereviews">Based on 6
                                                    reviews456</span></span>
                                            <span class="spr-summary-actions">
                                                <a href="#" class="spr-summary-actions-newreview btn">Write a review</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="spr-content">
                                        <div class="spr-form clearfix">
                                            <form method="post" action="#" id="new-review-form" class="new-review-form">
                                                <h3 class="spr-form-title">Write a review</h3>
                                                <fieldset class="spr-form-contact">
                                                    <div class="spr-form-contact-name">
                                                        <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                        <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                    </div>
                                                    <div class="spr-form-contact-email">
                                                        <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                        <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                    </div>
                                                </fieldset>
                                                <fieldset class="spr-form-review">
                                                    <div class="spr-form-review-rating">
                                                        <label class="spr-form-label">Rating</label>
                                                        <div class="spr-form-input spr-starrating">
                                                            <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                        </div>
                                                    </div>

                                                    <div class="spr-form-review-title">
                                                        <label class="spr-form-label" for="review_title_10508262282">Review
                                                            Title</label>
                                                        <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                    </div>

                                                    <div class="spr-form-review-body">
                                                        <label class="spr-form-label" for="review_body_10508262282">Body of Review
                                                            <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                        <div class="spr-form-input">
                                                            <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="spr-form-actions">
                                                    <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="spr-reviews">
                                            <div class="spr-review">
                                                <div class="spr-review-header">
                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                    <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                                    <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09,
                                                            2019</strong></span>
                                                </div>
                                                <div class="spr-review-content">
                                                    <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                            <div class="spr-review">
                                                <div class="spr-review-header">
                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                    <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing
                                                    </h3>
                                                    <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec
                                                            30, 2018</strong></span>
                                                </div>

                                                <div class="spr-review-content">
                                                    <p class="spr-review-content-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                                        sunt explicabo.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="spr-review">
                                                <div class="spr-review-header">
                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                    <h3 class="spr-review-header-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h3>
                                                    <span class="spr-review-header-byline"><strong>quoctri1905</strong> on
                                                        <strong>Dec 30, 2018</strong></span>
                                                </div>

                                                <div class="spr-review-content">
                                                    <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled.<br>
                                                        <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tab3" class="tab-content" style="display: none;">
                            <h4>How to use</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat
                                justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.
                            </p>
                            <h4>Shipping</h4>
                            <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus. Integer sit
                                amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                        </div>

                        <div id="tab4" class="tab-content" style="display: none;">
                            <h4>Returns Policy</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat
                                justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                            <h4>Shipping</h4>
                            <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus. Integer sit
                                amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                        </div>
                    </div>
                </div>
                <!--End Product Tabs-->

                <!--Related Product Slider-->
                <div class="related-product grid-products">
                    <header class="section-header">
                        <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                        <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                    </header>
                    <div class="productPageSlider slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4313px; transform: translate3d(-1135px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">3/4 Sleeve Kimono Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Cape Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$900.00</span>
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Paper Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 227px;"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="0">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="0">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="0">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant5.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant6.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 227px;"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="0">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="0">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="0">Elastic Waist Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 227px;"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="0">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="0">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="0">3/4 Sleeve Kimono Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 227px;"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="0">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="0">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="0">Cape Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$900.00</span>
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 227px;"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="0">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="0">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="0">Paper Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant5.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant6.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Elastic Waist Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">3/4 Sleeve Kimono Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Cape Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$900.00</span>
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Paper Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
                </div>
                <!--End Related Product Slider-->

                <!--Recently Product Slider-->
                <div class="related-product grid-products">
                    <header class="section-header">
                        <h2 class="section-header__title text-center h2"><span>Recently Viewed Product</span></h2>
                        <p class="sub-heading">You can manage this section from store admin as describe in above section</p>
                    </header>
                    <div class="productPageSlider slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4313px; transform: translate3d(-1135px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">3/4 Sleeve Kimono Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Cape Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$900.00</span>
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Paper Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">
                                    <a href="#" title="Quick View" class="quick-view" tabindex="-1">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 227px;"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="0">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="0">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="0">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant5.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant6.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 227px;"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="0">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="0">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="0">Elastic Waist Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 227px;"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="0">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="0">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="0">3/4 Sleeve Kimono Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 227px;"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="0">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="0">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="0">Cape Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$900.00</span>
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 227px;"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="0">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="0">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="0">Paper Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">
                                    <a href="#" title="Quick View" class="quick-view" tabindex="-1">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant5.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant6.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Elastic Waist Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant2-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">3/4 Sleeve Kimono Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Cape Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$900.00</span>
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant4-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Paper Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!-- Variant -->
                                <!-- <ul class="swatches">
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-1.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-2.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-3.jpg" alt="image" /></li>
                                    <li class="swatch medium rounded"><img src="assets/images/product-images/variant3-4.jpg" alt="image" /></li>
                                </ul> -->
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">

                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" style="width: 227px;" tabindex="-1"><div><div class="col-12 item" style="width: 100%; display: inline-block;">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="#" tabindex="-1">
                                    <!-- image -->
                                    <img class="primary blur-up ls-is-cached lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyloaded" data-src="img/s2370435-main-zoom.webp" src="img/s2370435-main-zoom.webp" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="-1">Select Options</button>
                                </form>
                                <div class="button-set">
                                    <a href="#" title="Quick View" class="quick-view" tabindex="-1">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html" tabindex="-1">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#" tabindex="-1">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                            </div>
                            <!-- End product details -->
                        </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
                </div>
                <!--End Recently Product Slider-->
            </div>
        </div>
    </section>
</div>
<button class="slick-next slick-arrow" aria-label="Next" type="button">Next  </button>

@endsection
@push('child-scripts')

<script>

    $(document).on('click','.select-size', function(){
      
      var id = $(this).attr('id');

    
    
      var url ="{{ route('front.select.size') }}";
      $.ajax({

        type:"get",
        url: url,
        data: {id:id},
        success:function(response){

            if(response.success == true){

                // console.log(response.view);

              $('.put-content-here').html(response.view);
            
            }
        }


      });

    });

    $(document).on('click','.add-to-cart',function(){
       
        var id = $(this).attr('id');
        var qty = $('input[name="quantity"]').val();
        var url = "{{ route('front.add.to.cart') }}";

        // alert(url);
        // return false;

        $.ajax({

                type:"get",
                url: url,
                data: {id:id,qty:qty},
                success:function(response){

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
                        $('.count').html(response.itemsInCart);

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


<script src="{{ asset('public/frontend/js/coupoun.js') }}"></script>
<script src="{{ asset('public/frontend/js/js_v.js') }}"></script>
<script src="{{ asset('public/frontend/js/lazysizes.js') }}"></script>
<script src="{{ asset('public/frontend/js/main.js') }}"></script>


<script src="{{ asset('public/frontend/js/vendor/jquery.cookie.js')}}"></script>
<script src="{{ asset('public/frontend/js/plugin.js') }}"></script>

<script src="{{ asset('public/frontend/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/vendor/wow.min.js')}}"></script>





{{-- <script src="js/vendor/jquery.cookie.js"></script>
<script src="js/plugin.js"></script>
<script src="js/vendor/"></script>
<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="js/vendor/wow.min.js"></script>
<script src="js/lazysizes.js"></script>
<script src="js/main.js"></script> --}}

<script src="{{ asset('public/frontend/js/vendor/photoswipe.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/vendor/photoswipe-ui-default.min.js') }}"></script>


{{-- <script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="js/vendor/photoswipe.min.js"></script>
<script src="js/vendor/photoswipe-ui-default.min.js"></script> --}}
@endpush
