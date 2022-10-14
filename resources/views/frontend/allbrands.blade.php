@extends('frontend.layouts.master')
@section('title')
F
@endsection
@section('meta_title')
All Brands
@endsection
@section('meta_description')
All Brands
@endsection
@section('meta_keyword')
All Brands
@endsection

@section('content')
 <!-- main sec -->
<div role="main" id="content">
        <section>
            <div class="std-side-padding all-brand-list">
                <h1 class="all-brands-heading">All Perfume &amp; Cologne Brands</h1>
                <div class="c4-3-of-12 sticky mq4-show">
                    <div class="mq2-show">
                        <div class="side-box box box-style-1">
                            <div>
                                <header class="box-head-1 has-emphasized-border">
                                    <h2 class="h4">All Brands By Letter</h2>
                                </header>
                                <div>
                                    <ul class="alpha sans">
                                        @foreach($alphabets as $alphabet)
                                        <li class="{{ (Request::segment(2) == $alphabet??'allbrands') ? 'active':'' }}">
                                            <a href="{{($alphabet == 'ALL')? route('front.all.brands'):route('front.brand.alphabet',[$alphabet]) }}">{{ $alphabet }}</a>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="box box-style-3 shop-by-dept">
                            <h2 class="h4">Shop Brand by Department:</h2>
                            <ul>
                                <li>
                                    <a class="cta link-1" href="{{ route('front.brand.alphabet',[$alphabet,'Perfume']) }}">
                                    Perfume
                                    <svg class="cta-icon" width="12" height="12">
                                        <use xlink:href="/Images/general-icon.svg?v=1#arrow-cta"></use>
                                    </svg>
                                </a>
                                </li>
                                <li>
                                    <a class="cta link-1" href="{{ route('front.brand.alphabet',[$alphabet,'Cologne']) }}">
                                    Cologne
                                    <svg class="cta-icon" width="12" height="12">
                                        <use xlink:href="/Images/general-icon.svg?v=1#arrow-cta"></use>
                                    </svg>
                                </a>
                                </li>
                                <li style="width: 100%;">
                                    <a class="cta link-1" href="{{ route('front.all.brands') }}">
                                    All Brands
                                    <svg class="cta-icon" width="12" height="12">
                                        <use xlink:href="/Images/general-icon.svg?v=1#arrow-cta"></use>
                                    </svg>
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="c4-9-of-12">
                    <div class="side-box box box-style-1">
                        <div>
                            <header class="box-head-1">
                                <h2 class="h3">
                                    Popular Perfume &amp; Cologne 
                                </h2>
                            </header>
                        </div>
                        @php
                        // $count = count($brands);
                        // $parta =2;
                        // $partb = 2;
                        // $halved = array_chunk($brands, ceil(count($brands)/2));
                        // dd($halved);
                        @endphp
                        <div class=" brand-list-body">
                            <div>
                                @php
                                // dd(Request::segment(2));
                                $allbrand = \App\Models\Brand::where('status',1)->orderBy('name')->get();  
                                @endphp
                                @foreach($allbrand->chunk(4) as $brand)
                                <div class="c3-6-of-12">
                                    @foreach($brand->chunk(4) as $chunk2)
                                    <div class="c3-6-of-12">
                                        <ul>
                                            @foreach($chunk2 as $chunky)
                                            <li><a href="{{ route('front.product.show',[$chunky->slug]) }}" class="link-3">{{ $chunky->name }}</a>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                </div>
            </div>

                <div class="c4-9-of-12">
                    <div class="side-box box box-style-1">
                        <div>
                            <header class="box-head-1">
                                <h2 class="h3">
                                    All {{ Request::segment(3)??'Perfume & Cologne' }} Brands By Letter {{ Request::segment(2)??'' }}
                                </h2>
                            </header>

                            <div class="mq1lshow mq4-hide">
                                <ul class="alpha sans">
                                    <li><a href="#letter_num">#</a></li>
                                    <li><a href="#letter_a">A</a></li>
                                    <li><a href="#letter_b">B</a></li>
                                    <li><a href="#letter_c">C</a></li>
                                    <li><a href="#letter_d">D</a></li>
                                    <li><a href="#letter_e">E</a></li>
                                    <li><a href="#letter_f">F</a></li>
                                    <li><a href="#letter_g">G</a></li>
                                    <li><a href="#letter_h">H</a></li>
                                    <li><a href="#letter_i">I</a></li>
                                    <li><a href="#letter_j">J</a></li>
                                    <li><a href="#letter_k">K</a></li>
                                    <li><a href="#letter_l">L</a></li>
                                    <li><a href="#letter_m">M</a></li>
                                    <li><a href="#letter_n">N</a></li>
                                    <li><a href="#letter_o">O</a></li>
                                    <li><a href="#letter_p">P</a></li>
                                    <li><a href="#letter_q">Q</a></li>
                                    <li><a href="#letter_r">R</a></li>
                                    <li><a href="#letter_s">S</a></li>
                                    <li><a href="#letter_t">T</a></li>
                                    <li><a href="#letter_u">U</a></li>
                                    <li><a href="#letter_v">V</a></li>
                                    <li><a href="#letter_w">W</a></li>
                                    <li><a href="#letter_x">X</a></li>
                                    <li><a href="#letter_y">Y</a></li>
                                    <li><a href="#letter_z">Z</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="brand-list-body">
                            <div>
                                 @foreach($brands->chunk(4) as $brand)
                                <div class="c3-6-of-12">
                                    @foreach($brand->chunk(12) as $chunk2)
                                    <div class="c3-6-of-12">
                                        <ul>
                                            @foreach($chunk2 as $chunky)
                                            <li><a href="{{ route('front.product.show',[$chunky->slug]) }}" class="link-3">{{ $chunky->name }}</a>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-3-of-12">&nbsp;</div>
                <div class="c-12-of-12 c4-9-of-12 all-brands-content">
                    <h2 class="h3">Save on the Top Perfume Brands for Women and Men</h2>
                    <p>FragranceX.com is best place to find the most popular name-brand perfumes at discount prices. Whether you're looking for Versace or Ariana Grande's signature scents, you'll find the best perfume brands in our huge collection. When
                        you buy designer fragrances from us, you'll save up to 80% on the most popular perfume brands for women and men, and every scent you buy is guaranteed to be authentic. Find your new favorite perfume or cologne or stock up on your
                        signature scent for less!</p>
                    <h2 class="h3">What Is the Best Designer Perfume Brand?</h2>
                    <p>The best designer perfumes will be unique to each person, depending on your tastes and your body chemistry. Some of the most highly regarded&nbsp;<a target="_blank" href="https://www.whowhatwear.com/best-designer-perfumes/slide15"
                            auto-tracked="true">perfume
                        designers</a>&nbsp;include Chanel, Versace, Gucci, Dior, Jimmy Choo, and Burberry. You'll find steeply discounted prices on these expensive perfume brands and many more when you shop with FragranceX.com.
                    </p>
                    <h2 class="h3">What Are the Most Popular Perfume Brands?</h2>
                    <p>Some of the most popular luxury perfume brands include timeless classics like&nbsp;<a target="_blank" href="https://www.a.com/products/_bid_christian--dior-am-lid_c__brands.html">Dior</a>,&nbsp;<a target="_blank" href="https://www.a.com/products/_bid_versace-am-lid_v__brands.html">Versace</a>,
                        <a target="_blank" href="https://www.a.com/products/_bid_chanel-am-lid_c__brands.html">&nbsp;Chanel</a>, and&nbsp;
                        <a target="_blank" href="https://www.a.com/products/_bid_gucci-am-lid_g__brands.html">Gucci</a>.&nbsp;<a target="_blank" href="https://www.rollingstone.com/product-recommendations/lifestyle/best-celebrity-fragrances-by-musicians-1084704/"
                            auto-tracked="true">Celebrities</a>&nbsp;have also started best-selling designer fragrance brands, including&nbsp;<a target="_blank" href="https://www.a.com/products/_bid_ariana--grande-am-lid_a__brands.html">Ariana
                        Grande</a>,&nbsp;<a target="_blank" href="https://www.a.com/products/_bid_katy--perry-am-lid_k__brands.html">Katy
                        Perry</a>,&nbsp;<a target="_blank" href="https://www.a.com/products/_bid_justin--bieber-am-lid_j__brands.html">Justin
                        Bieber</a>, and&nbsp;<a target="_blank" href="https://www.a.com/products/_bid_nicki--minaj-am-lid_n__brands.html">Nicki
                        Minaj</a>. We carry a wide range of famous men's and women's designer perfume brands for sale at FragranceX.com, from&nbsp;<a target="_blank" href="https://www.a.com/products/_bid_alfred--sung-am-lid_a__brands.html">Alfred
                        Sung</a>&nbsp;to&nbsp;<a target="_blank" href="https://www.a.com/products/_bid_yves--saint--laurent-am-lid_y__brands.html">Yves
                        Saint Laurent</a>&nbsp;and beyond!</p>
                    <h2 class="h3">How Can I Get Inexpensive Designer Perfume?</h2>
                    <p>Shop with FragranceX.com and you'll be able to buy discount designer perfume online at prices up to 80% off! We make it affordable to buy all of your favorite scents from the top&nbsp;<a target="_blank" href="https://www.a.com/products/_cid_perfume__category.html">perfume</a>&nbsp;brands
                        for ladies as well as the most popular&nbsp;<a target="_blank" href="https://www.a.com/products/_cid_cologne__category.html">cologne</a>&nbsp;brands. You can also take advantage of free shipping to save even more when you order
                        from our perfume brands list.</p>
                    <p>There's also one more way to get an even better deal on your favorite designer perfume brands: Join our rewards program. Frequent shoppers can earn extra discounts on their favorite well-known perfume brands, and you'll also be the
                        first to know about new deals on our site. Sign up today and buy designer fragrances for less!</p>
                </div>
            </div>
            <section class="peripherals" style="height: 60px;"></section>
        </section>
    </div>
    @push('child-scripts')
    {{-- <script type="text/javascript">

      $(document).on('change','.link-3',function(){


     var gender1 = $('.gender1:checkbox:checked');
     var gender2 = $('.gender2:checkbox:checked');
     var gender3 =$('.gender3:checkbox:checked');;
        alert(gender3);
      })
    
    </script> --}}

    @endpush

    <!-- main sec  ends-->
@endsection