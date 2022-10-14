<div class="search-result-grid">
                            @if(isset($products))
                             @foreach($products as $product)
                            
                            <div class="c-6-of-12 c3-4-of-12 c5-3-of-12">
                               
                                   @php
                                        $image= \App\Models\ProductImage::where('product_id',$product->id)->first();
                                        $brand = \App\Models\Brand::where('id',$product->brand_id)->first();
                                        @endphp
                                <div class="product-grid-cell">
                                    <div class="product-img">
                                        <a href="{{ route('front.product.show',[$brand->slug,$product->slug]) }}">
                                            <picture>
                                                <source srcset="{{ $image->path??'' }}">
                                                <img alt="\" height="191" width="191" src="{{ $image->path??'' }}">
                                            </picture>
                                            <noscript>
                                                <img src="{{ $image->path??'' }}"
                                                    alt="" />
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="product-desc-1">
                                        <h3 class="h3 serif">
                                            <a class="animate" href="{{ route('front.product.show',[$brand->slug,$product->slug]) }}" aria-label="\"></a>
                                            <a class="link-2" href="{{ route('front.product.show',[$brand->slug,$product->slug]) }}" aria-label="\"></a>
                                                {{ $product->name }}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="product-review " id="review-884W">
                                        <div class="p-w-r">
                                            <div class="pr-stars">
                                                <div class="stars-total" style="width: 92.00%;"></div>
                                            </div>
                                            <div class="review-count"><span>(1731)</span></div>
                                        </div>
                                    </div>
                                    <div class="product-desc-2">
                                        by <span> @php
                                        $brand= \App\Models\Brand::where('id',$product->brand_id)->first();

                                        $category= \App\Models\Category::where('id',$product->category_id)->first();

                                        @endphp
                                            <a class="link-3"
                                                href="">{{ $brand->name }}</a>
                                        </span>
                                    </div>
                                    <span class="category">{{ $category->name }}'s</span><br>
                                    <div class="product-desc-3">
                                        Up to 0% Off
                                    </div>
                                    <input type="hidden" class="ga-item-model" value="{&quot;NameShort&quot;:&quot;\&quot;,&quot;UnitPrice&quot;:39.81,&quot;Brand&quot;:&quot;Dolce &amp; Gabbana&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:&quot;Eau De Toilette Spray&quot;,&quot;Size&quot;:&quot;0.8 oz&quot;,&quot;AutoSku&quot;:&quot;418223&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;884W&quot;}">
                                </div>
                           
                            </div>
                             @endforeach
                    
                             <div id="ajax-filte">

                                {{$products->links('pagination::bootstrap-5')}}
                             </div>
                           
                                
                           

                         @endif
                        </div>

                    </div>
                   
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
                            <div>Orders ship on the day that you place them and arrive within days.</div>
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
                            <div>100% authentic fragrances. You won't find knockoffs or imitations here.</div>
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
                            <img src="https://img.fragrancex.com/images/assets/icons/fivestar.svg" data-src="https://img.fragrancex.com/images/assets/icons/fivestar.svg" alt="" class="" width="60" height="60">
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

{{-- @push('child-scripts')
<script type="text/javascript">

$(document).on('change','.link-3',function(){

var filteredValues = "{{ url('search?') }}";

if($('input[name="GenderFilter[]"]:checked').serialize();){

   filteredValues+= $('input[name="GenderFilter[]"]:checked').serialize();

}




if($('input[name="BrandFilter"]:checked').serialize()){
  
  filteredValues+='&';
 filteredValues+= $('input[name="BrandFilter[]"]:checked').serialize();

}

if($('input[name="TypeFilter"]:checked').serialize()){

 filteredValues+='&';
 filteredValues+= $('input[name="TypeFilter[]"]:checked').serialize();   
}
if($('input[name="DepartmentFilter"]:checked').serialize()){
 
 filteredValues+='&';
 filteredValues+= $('input[name="DepartmentFilter[]"]:checked').serialize();

}

if($('input[name="ScentFilter"]:checked').serialize()){
  
  filteredValues+='&';
 filteredValues+= $('input[name="ScentFilter[]"]:checked').serialize();

}

// var old_url = "{{ url('/search') }}";
// var new_url = old_url+"?"+filteredValues;

if (window.history != 'undefined' && window.history.pushState != 'undefined') {
       window.history.pushState({ path: filteredValues }, '', filteredValues);
    }

 
 
 
 
 // alert(checkboxValues);

 // window.pushState


// gender = $('input[name="GenderFilter"]:checked').val();
// var brand = "dolce";
// var tester = tester;
// var url = "/search/gender="+gender+"brand="+brand+"tester="+tester;

// alert(url);




})

</script>

@endpush

<!-- main sec  ends-->
@endsection --}}