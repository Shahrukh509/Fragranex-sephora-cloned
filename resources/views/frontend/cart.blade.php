@extends('frontend.layouts.master')
@section('title')
{{ $category->title ?? 'Cart' }}
@endsection
@section('meta_title')
{{ $category->meta_title ?? 'Cart' }}
@endsection
@section('meta_description')
{{ $category->meta_description ?? 'Cart' }}
@endsection
@section('meta_keyword')
{{ $category->meta_keyword ?? 'Cart' }}
@endsection


@section('content')
<!-- main sec -->

{{--  @php $total = 0;
@endphp
@if (session('cart'))
@foreach (session('cart') as $id => $details)
@php $total += $details['price'] * $details['quantity'];
@endphp
@endforeach
@endif --}}

<div role="main" id="content">
<section>
<div class="cart-wrapper std-side-padding put-remove-content-here">
<section id="CartTableAsyncSection">
<div class="cart-tip-wrapper-mobile">
</div>
<div class="c5-8-of-12 ">
<div class="name-line mq0none">
<input id="ItemCount" type="hidden" value="3">

<div class="serif">
Total (<span class="total-items">
{{ \Cart::getTotalQuantity() }}
</span>) items

<span class="mq2show">
: <bdo dir="ltr">RS <span class="all_total">{{ number_format(\Cart::getTotal()) }}
</span>
</bdo>
</span>
<span class="mq2none">
<bdo dir="ltr">RS <span
class="all_total">{{ number_format(\Cart::getTotal()) }}</span></bdo>
</span>
</div>
</div>
<div id="cart-continueshopping-toplink">
<a class="cta" href="{{ route('front.home') }}">
Continue shopping
<svg class="cta-icon" width="12" height="12">
<use xlink:href="/Images/general-icon.svg?v=3#arrow-cta"></use>
</svg>
</a>
</div>
<div class="top-message" style="display:none">
</div>
<form method="get" action="/orders/checkoutvert" class="cart-button-top">
<div class="checkout-button mq4none">
<a class="btn-type-2" href="{{ route('front.show.checkout') }}"
aria-label="Proceed to Checkout">
<span class="mq4none">
Proceed to <span class="mq0show">Secure</span> Checkout
<img class="secure mq0show" alt="Padlock"
src="https://img.fragrancex.com/images//assets/icons/secure-padlock-icon.svg">
</span>
</a>
<noscript>
<input value="true" type="hidden" name="noscript" />
</noscript>
</div>
</form>
<div class="c4-12-of-12">
<div class="cart-grid">
<div class="cart-col-header ">
<div class="c3-3-of-12 c5-2-of-12 grey-header ">
Product Information
</div>
<div class="c3-9-of-12 c5-10-of-12 ">
<div class="c5-4-of-12 info-div "></div>
<div class="c5-8-of-12 price-div ">
<div class="c5-5-of-12 price-wrapper-header ">
    <div class="grey-header price-header">Price</div>
</div>
<div class="c5-3-of-12 qty-container-header ">
    <div class="grey-header">Quantity</div>
</div>
<div class="c5-4-of-12 total-wrapper-header ">
    <div class="grey-header">Total</div>
</div>
</div>
</div>
</div>
<div class="cartitems-padding">
@foreach (\Cart::getContent() as $value)
@php
// dd($value->attributes);
$product = \App\Models\ProductVariation::where('id', $value->id)->first();
$brand_slug = $product->product->brand->slug;

@endphp
<div class="cart-item-wrapper nonmessage cart-product ">
<div class="c0-5-of-12 c-4-of-12 c3-3-of-12 c5-2-of-12 item-img">
    <a href="{{ route('front.product.show', [$brand_slug, $product->product->slug]) }}"
        aria-label="">
        <picture>
            <source
                srcset="{{ asset($product->image->path??'') }}"
                type="image/webp">
            <img src="{{ asset($product->image->path??'') }}"
                height="218" width="218">
        </picture>
    </a>
</div>
<div class="c0-7-of-12 c-8-of-12 c3-9-of-12 c5-10-of-12 item-content">
    <div class="c2-6-of-12 c5-4-of-12 info-div ">
        <h2 class="cart-item-name serif ">
            <a class="link-2"
                href="{{ route('front.product.show', [$brand_slug, $product->product->slug]) }}">{{ $value['name'] }}</a>
        </h2>
        <div class="cart-item-brand">by
            {{ $product->product->brand->name ?? '' }}</div>
        <div class="cart-item-sku mtn">Item #{{ $product->id ?? '' }}</div>
        <div class="cart-item-size">
            {{ $value->attributes->size ?? '' }}
            {{ $product->type->name ?? '' }}
        </div>
        <div class="stock-msg">
            {{ $value->attributes->instock ? 'InStock' : 'OutOfStock' }}
        </div>
        <a href="{{ route('front.remove.from.cart',[$value->id]) }}" id="{{ $value->id }}">
            Remove
        </a>

    </div>
    <div class="c2-6-of-12 c5-8-of-12 price-div">
        <div
            class="c2-12-of-12 c5-7-of-12 column-wrapper mq2none price-wrapper">
            <div class="price-section">
                <div class="before-price"><bdo
                        dir="ltr">RS&nbsp;{{ $value['price'] }}
                    </bdo>
                    Regular Price</div>
                {{--  <div class="after-price c2-9-of-12 c5-12-of-12"><bdo dir="ltr">ARS $&nbsp;4,682.07</bdo> After Coupon</div> --}}
            </div>
        </div>
        <div
            class="c2-12-of-12 c5-5-of-12 column-wrapper mq2show price-wrapper ">
            <div class="price-section">
                <div class="grey-label">Price</div>
                <div class="before-price">
                    <bdo dir="ltr">RS
                        <span
                            class="">{{ number_format($value->price) }}
                        </span></bdo>
                    Regular Price
                </div>
                {{--  <div class="after-price c2-9-of-12 c5-12-of-12"><bdo dir="ltr">ARS $&nbsp;4,682.07</bdo> After Coupon</div> --}}
            </div>
        </div>
        <div class="c2-12-of-12 c5-3-of-12 column-wrapper qty-container ">
            <div class="grey-label">Quantity
                <span class="mq4none">:&nbsp;</span>
            </div>

            <div class="cart-qty-normal-dd">
                <div class="select-container">
                    <select class="cart-qty-select"
                        product-id="{{ $value->id }}">
                        @php
                            $qty = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10+'];
                            
                        @endphp
                        @foreach ($qty as $quantity)
                            <option
                                value="{{ $quantity }}"{{ $value['quantity'] == $quantity ? 'selected' : '' }}>
                                {{ $quantity }}
                            </option>
                        @endforeach
                    </select>
                </div>
                {{--  <input class="cart-qty-input" inputmode="numeric" type="number" style="display: none;" placeholder="Qty." aria-label="Quantity">
<div class="qty-change-wrapper">
<a href="/orders/cart/removefromcart?detailid=6d2c57c4-4a32-43b2-94b3-15b527e2ee02" class="c5-8-of-12 cart-quantity-remove link-1 mq2-hide" aria-label="Remove Light Blue by Dolce &amp; Gabbana 24 ml Eau De Toilette Spray for Women from cart">Remove</a>
</div> --}}
                {{-- <div class="cart-qty-update" style="display: none;">
<button>Update</button>
</div> --}}
            </div>
        </div>
        <div class="c5-4-of-12 column-wrapper mq4show total-wrapper ">
            <div class="price-section">
                <div class="before-price"><bdo dir="ltr">RS
                        <span
                            class="partial_total_{{ $value['id'] }}">{{ number_format($value->price * $value->quantity) }}
                        </span>
                    </bdo>
                </div>
                {{-- <div class="after-price c2-9-of-12 c5-12-of-12"><bdo dir="ltr">ARS $&nbsp;14,046.22</bdo> After Coupon</div> --}}
            </div>
        </div>
    </div>
</div>
</div>
@endforeach



</div>
</div>
</div>
</div>
<div class=" c5-4-of-12 summary-section">
<div class="order-summary-wrapper bg-padding">
<div class="checkout-btn-container mq4show-block">
<div class="checkout-button">
<a class="btn-type-2" href="{{ route('front.show.checkout') }}"
aria-label="Proceed to Checkout" aria-label="Proceed to Checkout">
Proceed to <span class="mq0show">Secure</span> Checkout
<img class="secure mq0show" alt="Padlock"
src="https://img.fragrancex.com/images//assets/icons/secure-padlock-icon.svg">
</a>
</div>
{{-- <div class="pp-summary-desktop">
<a class="paypal-checkout" href="/orders/cart/paypal.html">
Check out with
<img src="https://img.fragrancex.com/images/paypal.svg" alt="Pay by Paypal"
width="62" height="17">
</a>
</div> --}}
<div class="google-pay-wrapper"></div>
<div class="apple-pay-wrapper">
<a href="#" class="apple-pay-button-with-text" aria-label="Pay with apple pay">
<span class="text">Buy With</span>
<span class="logo"></span>
</a>
</div>
</div>
<div class="cart-tip-wrapper">
</div>
<div class="subtotal-section">
<div class="c-6-of-12">Subtotal</div>
<div class="c-6-of-12">
<bdo dir="ltr">RS <span
class="all_total">{{ number_format(Cart::getSubTotal()) }}</span></bdo>
</div>
</div>
<div class="line"></div>
<div class="total-section">
<div class="c-6-of-12">
Total </div>
<div class="c-6-of-12">
<bdo dir="ltr">RS <span
class="all_total">{{ number_format(Cart::getTotal()) }}</span></bdo>
</div>
</div>
<div class="checkout-btn-container mq4none-block">
<div class="checkout-button">
<a class="btn-type-2" href="{{ route('front.show.checkout') }}"
aria-label="Proceed to Checkout" aria-label="Proceed to Checkout">
Proceed to <span class="mq0show">Secure</span> Checkout
<img class="secure mq0show" alt="Padlock"
src="https://img.fragrancex.com/images//assets/icons/secure-padlock-icon.svg">
</a>
</div>
{{-- <div class="pp-summary-mobile">
<a class="paypal-checkout" href="/orders/cart/paypal.html">
Check out with
<img src="https://img.fragrancex.com/images/paypal.svg" alt="Pay by Paypal"
width="62" height="17">
</a>
</div> --}}
<div class="google-pay-wrapper"></div>
<div class="apple-pay-wrapper">
<a href="#" class="apple-pay-button-with-text" aria-label="Pay with apple pay">
<span class="text">Buy With</span>
<span class="logo"></span>
</a>
</div>
</div>
</div>
<script>
var paymodel = {
"Wholesale": false,
"LoggedIn": false,
"IsEmpty": false,
"IsFlippedCurrency": false,
"Subtotal": 16524.96,
"ShowCouponDiscount": false,
"CouponDiscount": 0,
"ShowLoyaltyDiscount": false,
"LoyaltyDiscount": 0,
"ShowStoreCredit": false,
"StoreCredit": 0,
"GrandTotal": 16524.96,
"CurrencySymbol": "ARS $ ",
"CurrencyAbbreviation": "ARS",
"ContinueShoppingUrl": "{{ route('front.home') }}",
"ShowTopMessage": false,
"TopMessage": null,
"CouponCode": "",
"ShowCouponMessage": false,
"CouponMessage": "Coupon  Applied",
"ShowGiftcertMessage": false,
"GiftcertMessage": "Gift Certificate  Applied",
"CouponGiftcertError": false,
"StoreCreditMessage": "COD Credit  Applied",
"ShowStoreCreditMessage": false,
"CouponGiftcertErrorMessage": " ",
"CartDetail": [{
"CartDetaiId": "6d2c57c4-4a32-43b2-94b3-15b527e2ee02",
"ProductCode": "69036",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/69036.jpg",
"PageUrl": "/products/_cid_perfume-am-lid_l-am-pid_884w__products.html?sid=69036",
"Name": "Light Blue by Dolce \u0026 Gabbana 24 ml Eau De Toilette Spray for Women",
"LocName": "Light Blue by Dolce \u0026 Gabbana 24 ml Eau De Toilette Spray for women",
"ItemNumber": "418223",
"UnitPrice": 5508.32,
"UnitPriceBeforeSpecialVat": 5508.32,
"DiscountUnitPrice": 4682.07,
"DiscountUnitPriceUsdBeforeVat": 33.84,
"Price": 16524.96,
"PriceUsd": 119.43,
"PriceUsdBeforeSpecialVat": 119.4300,
"DiscountPrice": 14046.22,
"Quantity": 3,
"QuantityUpdated": false,
"InstockMsg": "In Stock.",
"WarningMsg": null,
"Brand": "Dolce+%26+Gabbana",
"BrandText": "by Dolce \u0026 Gabbana",
"NameShort": null,
"NameText": "Light Blue Perfume",
"SizeText": "0.8 oz",
"TypeText": "Eau De Toilette Spray",
"PinterestLikeItButtonItemViewModel": null,
"IsSubscription": false,
"ParentCode": null,
"Category": null,
"GaItemModel": {
"NameShort": "Light Blue",
"UnitPrice": 39.8100,
"Brand": "Dolce \u0026 Gabbana",
"Category": "Perfume",
"Type": "Eau De Toilette Spray",
"Size": "0.8 oz",
"AutoSku": "418223",
"Currency": "USD",
"Qty": 3,
"ParentCode": "884W"
}
}],
"ShowFreeShipMessage": false,
"ShowFreeShipLessThan59Message": false,
"LessThan59Message": null,
"PercentToFreeShipping": 0,
"ShowPercentFreeShipping": false,
"ShowCouponFreeShipMessage": false,
"ShowDiscountPrice": true,
"DiscountIsCoupon": true,
"IsEligible2DayShipping": false,
"ShowSpecialVatPriceMessage": false,
"SpecialVatPriceMessage": null,
"PageSuggestCouponApplied": false,
"CartGridViewModel": {
"IsEligible2DayShipping": false,
"ShowFreeShipLessThan59Message": false,
"CouponDiscount": 0,
"LoyaltyDiscount": 0,
"IsFlippedCurrency": false,
"ShowDiscountPrice": true,
"ContinueShoppingUrl": null,
"CurrencySymbol": "ARS $ ",
"CartDetail": [{
"CartDetaiId": "6d2c57c4-4a32-43b2-94b3-15b527e2ee02",
"ProductCode": "69036",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/69036.jpg",
"PageUrl": "/products/_cid_perfume-am-lid_l-am-pid_884w__products.html?sid=69036",
"Name": "Light Blue by Dolce \u0026 Gabbana 24 ml Eau De Toilette Spray for Women",
"LocName": "Light Blue by Dolce \u0026 Gabbana 24 ml Eau De Toilette Spray for women",
"ItemNumber": "418223",
"UnitPrice": 5508.32,
"UnitPriceBeforeSpecialVat": 5508.32,
"DiscountUnitPrice": 4682.07,
"DiscountUnitPriceUsdBeforeVat": 33.84,
"Price": 16524.96,
"PriceUsd": 119.43,
"PriceUsdBeforeSpecialVat": 119.4300,
"DiscountPrice": 14046.22,
"Quantity": 3,
"QuantityUpdated": false,
"InstockMsg": "In Stock.",
"WarningMsg": null,
"Brand": "Dolce+%26+Gabbana",
"BrandText": "by Dolce \u0026 Gabbana",
"NameShort": null,
"NameText": "Light Blue Perfume",
"SizeText": "0.8 oz",
"TypeText": "Eau De Toilette Spray",
"PinterestLikeItButtonItemViewModel": null,
"IsSubscription": false,
"ParentCode": null,
"Category": null,
"GaItemModel": {
"NameShort": "Light Blue",
"UnitPrice": 39.8100,
"Brand": "Dolce \u0026 Gabbana",
"Category": "Perfume",
"Type": "Eau De Toilette Spray",
"Size": "0.8 oz",
"AutoSku": "418223",
"Currency": "USD",
"Qty": 3,
"ParentCode": "884W"
}
}],
"AllowQtyUpdate": true,
"AllowRemove": true,
"AllowNav": true,
"Wholesale": false,
"UseExpandedMq4Layout": false
},
"ShowCodCreditCodeWs": false
};
</script>
{{-- <div class="coupon-wrapper">
<div class="pop">
<input aria-label="Expand Coupon Form" class="pop-trigger link-1" type="checkbox">
<div class="pop-content-wrapper">
<div class="pop-content">
<form action="/widgets/carttable/ajaxcartable" class="text-btn-combo" data-ajax="true" data-ajax-method="get" data-ajax-success="initAfterCartAjaxLoad({responseText: data});if($('#name.error').length < 1) {trackCouponApplied('cart-page');}" data-ajax-url="/widgets/carttable/ajaxcartcoupongiftcertaction"
id="CardTableAsyncForm" method="post"> <input aria-label="Coupon Code" class="input-text-1 " type="text" name="code" id="name" value="" placeholder="Apply Coupon">
<button type="submit" value="Apply" class="btn-type-2 ">Apply</button>
<noscript>
<input type="hidden" value="true" name="noscript"/>
</noscript>
</form>
<div>
</div>
</div>
<span class="link-1">Apply Coupon or Gift Certificate </span>
</div>
</div>
</div> --}}
<div>
<form action="/widgets/recommendedcarousel/getcartrecommendedcarousel?itemToShow=6&amp;mode=1"
data-ajax="true" data-ajax-method="get" data-ajax-mode="replace"
data-ajax-success="initSlider('#AjaxRecommendedCarousel');initSliderAddToCart();"
data-ajax-update="#AjaxRecommendedCarousel" id="RecommendedAjaxForm" method="post">

</form>
{{-- <section id="AjaxRecommendedCarousel">
<div class="c-6-of-12 c3-4-of-12 c5-4-of-12 ">
<div class="product-grid-cell rec-item-502783" data-autosku="502783">
<div class="product-img">
<a href="/products/_cid_cologne-am-lid_i-am-pid_70338m__products.html">
<picture class="">
<source data-srcset="https://img.fragrancex.com/images/products/sku/small/immv.webp" type="image/webp" srcset="https://img.fragrancex.com/images/products/sku/small/immv.webp">
<img src="https://img.fragrancex.com/images/products/sku/small/immv.jpg" alt="Invictus" data-src="https://img.fragrancex.com/images/products/sku/small/immv.jpg" height="250" width="250">
</picture>
</a>
</div>
<div class="product-desc">
<div class="product-desc-1">
<h2 class="serif">
<a href="/products/_cid_cologne-am-lid_i-am-pid_70338m__products.html">Invictus</a>
</h2>
</div>
<div class="product-desc-2">
<div>
by <a href="/products/_bid_paco--rabanne-am-lid_p__brands.html">Paco Rabanne</a>
</div>
<div>
Men's
</div>
<div>
<bdo dir="ltr">ARS $&nbsp;346.95</bdo>
</div>
</div>
</div>
<div class="add-cart-section">
<form class="add-recommend" action="/orders/cart/addtocart?productCode=immv">
<button type="submit" class="btn-type-2 add-to-cart">
<span class="hide-this">Add +</span>
<span class="show-this">Add to Cart</span>
</button>
<input type="hidden" value="IMMV" name="productCode">
<input type="hidden" value="502783" name="productSku">
</form>
</div>
<input type="hidden" class="ga-item-model" value="{&quot;NameShort&quot;:&quot;Invictus&quot;,&quot;UnitPrice&quot;:2.9500,&quot;Brand&quot;:&quot;Paco Rabanne&quot;,&quot;Category&quot;:&quot;Cologne&quot;,&quot;Type&quot;:&quot;Vial (sample)&quot;,&quot;Size&quot;:&quot;0.05 oz&quot;,&quot;AutoSku&quot;:&quot;502783&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;70338M&quot;}">
</div>
</div>
<div class="c-6-of-12 c3-4-of-12 c5-4-of-12 ">
<div class="product-grid-cell rec-item-517422" data-autosku="517422">
<div class="product-img">
<a href="/products/_cid_perfume-am-lid_t-am-pid_61199w__products.html">
<picture class="">
<source data-srcset="https://img.fragrancex.com/images/products/sku/small/thegbl67.webp" type="image/webp" srcset="https://img.fragrancex.com/images/products/sku/small/thegbl67.webp">
<img src="https://img.fragrancex.com/images/products/sku/small/thegbl67.jpg" alt="The One" data-src="https://img.fragrancex.com/images/products/sku/small/thegbl67.jpg" height="250" width="250">
</picture>
</a>
</div>
<div class="product-desc">
<div class="product-desc-1">
<h2 class="serif">
<a href="/products/_cid_perfume-am-lid_t-am-pid_61199w__products.html">The One</a>
</h2>
</div>
<div class="product-desc-2">
<div>
by <a href="/products/_bid_dolce---am---gabbana-am-lid_d__brands.html">Dolce &amp; Gabbana</a>
</div>
<div>
Women's
</div>
<div>
<bdo dir="ltr">ARS $&nbsp;3,762.36</bdo>
</div>
</div>
</div>
<div class="add-cart-section">
<form class="add-recommend" action="/orders/cart/addtocart?productCode=thegbl67">
<button type="submit" class="btn-type-2 add-to-cart">
<span class="hide-this">Add +</span>
<span class="show-this">Add to Cart</span>
</button>
<input type="hidden" value="THEGBL67" name="productCode">
<input type="hidden" value="517422" name="productSku">
</form>
</div>
<input type="hidden" class="ga-item-model" value="{&quot;NameShort&quot;:&quot;The One&quot;,&quot;UnitPrice&quot;:31.9900,&quot;Brand&quot;:&quot;Dolce &amp; Gabbana&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:&quot;Golden Satin Lotion&quot;,&quot;Size&quot;:&quot;6.7 oz&quot;,&quot;AutoSku&quot;:&quot;517422&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;61199W&quot;}">
</div>
</div>
<div class="c-6-of-12 c3-4-of-12 c5-4-of-12 ">
<div class="product-grid-cell rec-item-442756" data-autosku="442756">
<div class="product-img">
<a href="/products/_cid_perfume-am-lid_e-am-pid_60582w__products.html">
<picture class="">
<source data-srcset="https://img.fragrancex.com/images/products/sku/small/eupes1f.webp" type="image/webp" srcset="https://img.fragrancex.com/images/products/sku/small/eupes1f.webp">
<img src="https://img.fragrancex.com/images/products/sku/small/eupes1f.jpg" alt="Euphoria" data-src="https://img.fragrancex.com/images/products/sku/small/eupes1f.jpg" height="250" width="250">
</picture>
</a>
</div>
<div class="product-desc">
<div class="product-desc-1">
<h2 class="serif">
<a href="/products/_cid_perfume-am-lid_e-am-pid_60582w__products.html">
Euphoria
</a>
</h2>
</div>
<div class="product-desc-2">
<div>
by <a href="/products/_bid_calvin--klein-am-lid_c__brands.html">Calvin Klein</a>
</div>
<div>
Women's
</div>
<div>
<bdo dir="ltr">ARS $&nbsp;3,502.44</bdo>
</div>
</div>
</div>
<div class="add-cart-section">
<form class="add-recommend" action="/orders/cart/addtocart?productCode=eupes1f">
<button type="submit" class="btn-type-2 add-to-cart">
<span class="hide-this">Add +</span>
<span class="show-this">Add to Cart</span>
</button>
<input type="hidden" value="EUPES1F" name="productCode">
<input type="hidden" value="442756" name="productSku">
</form>
</div>
<input type="hidden" class="ga-item-model" value="{&quot;NameShort&quot;:&quot;Euphoria&quot;,&quot;UnitPrice&quot;:29.7800,&quot;Brand&quot;:&quot;Calvin Klein&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:&quot;Eau De Parfum Spray&quot;,&quot;Size&quot;:&quot;1 oz&quot;,&quot;AutoSku&quot;:&quot;442756&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;60582W&quot;}">
</div>
</div>
<div class="c-6-of-12 c3-4-of-12 c5-4-of-12 mq5none-block">
<div class="product-grid-cell rec-item-418263" data-autosku="418263">
<div class="product-img">
<a href="/products/_cid_perfume-am-lid_l-am-pid_891w__products.html">
<picture class="lazy-img">
<source data-srcset="https://img.fragrancex.com/images/products/sku/small/llem30psw.webp" type="image/webp">
<img src="https://img.fragrancex.com/images/search-loading.gif" alt="Lolita Lempicka" data-src="https://img.fragrancex.com/images/products/sku/small/llem30psw.jpg" height="250" width="250">
</picture>
</a>
</div>
<div class="product-desc">
<div class="product-desc-1">
<h2 class="serif">
<a href="/products/_cid_perfume-am-lid_l-am-pid_891w__products.html">
Lolita Lempicka
</a>
</h2>
</div>
<div class="product-desc-2">
<div>
by <a href="/products/_bid_lolita--lempicka-am-lid_l__brands.html">Lolita Lempicka</a>
</div>
<div>
Women's
</div>
<div>
<bdo dir="ltr">ARS $&nbsp;4,119.89</bdo>
</div>
</div>
</div>
<div class="add-cart-section">
<form class="add-recommend" action="/orders/cart/addtocart?productCode=llem30psw">
<button type="submit" class="btn-type-2 add-to-cart">
<span class="hide-this">Add +</span>
<span class="show-this">Add to Cart</span>
</button>
<input type="hidden" value="LLEM30PSW" name="productCode">
<input type="hidden" value="418263" name="productSku">
</form>
</div>
<input type="hidden" class="ga-item-model" value="{&quot;NameShort&quot;:&quot;Lolita Lempicka&quot;,&quot;UnitPrice&quot;:35.0300,&quot;Brand&quot;:&quot;Lolita Lempicka&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:&quot;Eau De Parfum Spray&quot;,&quot;Size&quot;:&quot;1 oz&quot;,&quot;AutoSku&quot;:&quot;418263&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;891W&quot;}">
</div>
</div>
<div class="c-6-of-12 c3-4-of-12 c5-4-of-12 mq5none-block">
<div class="product-grid-cell rec-item-531459" data-autosku="531459">
<div class="product-img">
<a href="/products/_cid_cologne-am-lid_c-am-pid_94m__products.html">
<picture class="lazy-img">
<source data-srcset="https://img.fragrancex.com/images/products/sku/small/cca5bs.webp" type="image/webp">
<img src="https://img.fragrancex.com/images/search-loading.gif" alt="Chrome" data-src="https://img.fragrancex.com/images/products/sku/small/cca5bs.jpg" height="250" width="250">
</picture>
</a>
</div>
<div class="product-desc">
<div class="product-desc-1">
<h2 class="serif">
<a href="/products/_cid_cologne-am-lid_c-am-pid_94m__products.html">
Chrome
</a>
</h2>
</div>
<div class="product-desc-2">
<div>
by <a href="/products/_bid_azzaro-am-lid_a__brands.html">Azzaro</a>
</div>
<div>
Men's
</div>
<div>
<bdo dir="ltr">ARS $&nbsp;2,233.43</bdo>
</div>
</div>
</div>
<div class="add-cart-section">
<form class="add-recommend" action="/orders/cart/addtocart?productCode=cca5bs">
<button type="submit" class="btn-type-2 add-to-cart">
<span class="hide-this">Add +</span>
<span class="show-this">Add to Cart</span>
</button>
<input type="hidden" value="CCA5BS" name="productCode">
<input type="hidden" value="531459" name="productSku">
</form>
</div>
<input type="hidden" class="ga-item-model" value="{&quot;NameShort&quot;:&quot;Chrome&quot;,&quot;UnitPrice&quot;:18.9900,&quot;Brand&quot;:&quot;Azzaro&quot;,&quot;Category&quot;:&quot;Cologne&quot;,&quot;Type&quot;:&quot;Body Spray&quot;,&quot;Size&quot;:&quot;5 oz&quot;,&quot;AutoSku&quot;:&quot;531459&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;94M&quot;}">
</div>
</div>
<div class="c-6-of-12 c3-4-of-12 c5-4-of-12 mq5none-block">
<div class="product-grid-cell rec-item-454027" data-autosku="454027">
<div class="product-img">
<a href="/products/_cid_cologne-am-lid_a-am-pid_60413m__products.html">
<picture class="lazy-img">
<source data-srcset="https://img.fragrancex.com/images/products/sku/small/acmds.webp" type="image/webp">
<img src="https://img.fragrancex.com/images/search-loading.gif" alt="Armani Code" data-src="https://img.fragrancex.com/images/products/sku/small/acmds.jpg" height="250" width="250">
</picture>
</a>
</div>
<div class="product-desc">
<div class="product-desc-1">
<h2 class="serif">
<a href="/products/_cid_cologne-am-lid_a-am-pid_60413m__products.html">
Armani Code
</a>
</h2>
</div>
<div class="product-desc-2">
<div>
by <a href="/products/_bid_giorgio--armani-am-lid_g__brands.html">Giorgio Armani</a>
</div>
<div>
Men's
</div>
<div>
<bdo dir="ltr">ARS $&nbsp;3,651.80</bdo>
</div>
</div>
</div>
<div class="add-cart-section">
<form class="add-recommend" action="/orders/cart/addtocart?productCode=acmds">
<button type="submit" class="btn-type-2 add-to-cart">
<span class="hide-this">Add +</span>
<span class="show-this">Add to Cart</span>
</button>
<input type="hidden" value="ACMDS" name="productCode">
<input type="hidden" value="454027" name="productSku">
</form>
</div>
<input type="hidden" class="ga-item-model" value="{&quot;NameShort&quot;:&quot;Armani Code&quot;,&quot;UnitPrice&quot;:31.0500,&quot;Brand&quot;:&quot;Giorgio Armani&quot;,&quot;Category&quot;:&quot;Cologne&quot;,&quot;Type&quot;:&quot;Deodorant Stick&quot;,&quot;Size&quot;:&quot;2.6 oz&quot;,&quot;AutoSku&quot;:&quot;454027&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;60413M&quot;}">
</div>
</div>
<input class="SliderItems" disabled="disabled" name="SliderItems" type="hidden" value="[{&quot;ProductCode&quot;:&quot;IMMV&quot;,&quot;Name&quot;:&quot;Invictus&quot;,&quot;Brand&quot;:&quot;Paco Rabanne&quot;,&quot;ImageUrl&quot;:&quot;https://img.fragrancex.com/images/products/sku/small/immv.jpg&quot;,&quot;RedirectUrl&quot;:&quot;/products/_cid_cologne-am-lid_i-am-pid_70338m__products.html&quot;,&quot;BrandUrl&quot;:&quot;/products/_bid_paco--rabanne-am-lid_p__brands.html&quot;,&quot;CategoryLabel&quot;:&quot;Men\u0027s&quot;,&quot;Price&quot;:null,&quot;AvailableSizes&quot;:30,&quot;MinPrice&quot;:&quot;\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;346.95\u003c/bdo\u003e&quot;,&quot;Review&quot;:null,&quot;HasMedal&quot;:false,&quot;Medal&quot;:null,&quot;ItemSku&quot;:&quot;502783&quot;,&quot;ParentCode&quot;:null,&quot;GaItemModel&quot;:{&quot;NameShort&quot;:&quot;Invictus&quot;,&quot;UnitPrice&quot;:2.9500,&quot;Brand&quot;:&quot;Paco Rabanne&quot;,&quot;Category&quot;:&quot;Cologne&quot;,&quot;Type&quot;:&quot;Vial (sample)&quot;,&quot;Size&quot;:&quot;0.05 oz&quot;,&quot;AutoSku&quot;:&quot;502783&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;70338M&quot;}},{&quot;ProductCode&quot;:&quot;THEGBL67&quot;,&quot;Name&quot;:&quot;The One&quot;,&quot;Brand&quot;:&quot;Dolce \u0026 Gabbana&quot;,&quot;ImageUrl&quot;:&quot;https://img.fragrancex.com/images/products/sku/small/thegbl67.jpg&quot;,&quot;RedirectUrl&quot;:&quot;/products/_cid_perfume-am-lid_t-am-pid_61199w__products.html&quot;,&quot;BrandUrl&quot;:&quot;/products/_bid_dolce---am---gabbana-am-lid_d__brands.html&quot;,&quot;CategoryLabel&quot;:&quot;Women\u0027s&quot;,&quot;Price&quot;:null,&quot;AvailableSizes&quot;:46,&quot;MinPrice&quot;:&quot;\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;3,762.36\u003c/bdo\u003e&quot;,&quot;Review&quot;:null,&quot;HasMedal&quot;:false,&quot;Medal&quot;:null,&quot;ItemSku&quot;:&quot;517422&quot;,&quot;ParentCode&quot;:null,&quot;GaItemModel&quot;:{&quot;NameShort&quot;:&quot;The One&quot;,&quot;UnitPrice&quot;:31.9900,&quot;Brand&quot;:&quot;Dolce \u0026 Gabbana&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:&quot;Golden Satin Lotion&quot;,&quot;Size&quot;:&quot;6.7 oz&quot;,&quot;AutoSku&quot;:&quot;517422&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;61199W&quot;}},{&quot;ProductCode&quot;:&quot;EUPES1F&quot;,&quot;Name&quot;:&quot;Euphoria&quot;,&quot;Brand&quot;:&quot;Calvin Klein&quot;,&quot;ImageUrl&quot;:&quot;https://img.fragrancex.com/images/products/sku/small/eupes1f.jpg&quot;,&quot;RedirectUrl&quot;:&quot;/products/_cid_perfume-am-lid_e-am-pid_60582w__products.html&quot;,&quot;BrandUrl&quot;:&quot;/products/_bid_calvin--klein-am-lid_c__brands.html&quot;,&quot;CategoryLabel&quot;:&quot;Women\u0027s&quot;,&quot;Price&quot;:null,&quot;AvailableSizes&quot;:46,&quot;MinPrice&quot;:&quot;\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;3,502.44\u003c/bdo\u003e&quot;,&quot;Review&quot;:null,&quot;HasMedal&quot;:false,&quot;Medal&quot;:null,&quot;ItemSku&quot;:&quot;442756&quot;,&quot;ParentCode&quot;:null,&quot;GaItemModel&quot;:{&quot;NameShort&quot;:&quot;Euphoria&quot;,&quot;UnitPrice&quot;:29.7800,&quot;Brand&quot;:&quot;Calvin Klein&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:&quot;Eau De Parfum Spray&quot;,&quot;Size&quot;:&quot;1 oz&quot;,&quot;AutoSku&quot;:&quot;442756&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;60582W&quot;}},{&quot;ProductCode&quot;:&quot;LLEM30PSW&quot;,&quot;Name&quot;:&quot;Lolita Lempicka&quot;,&quot;Brand&quot;:&quot;Lolita Lempicka&quot;,&quot;ImageUrl&quot;:&quot;https://img.fragrancex.com/images/products/sku/small/llem30psw.jpg&quot;,&quot;RedirectUrl&quot;:&quot;/products/_cid_perfume-am-lid_l-am-pid_891w__products.html&quot;,&quot;BrandUrl&quot;:&quot;/products/_bid_lolita--lempicka-am-lid_l__brands.html&quot;,&quot;CategoryLabel&quot;:&quot;Women\u0027s&quot;,&quot;Price&quot;:null,&quot;AvailableSizes&quot;:54,&quot;MinPrice&quot;:&quot;\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;4,119.89\u003c/bdo\u003e&quot;,&quot;Review&quot;:null,&quot;HasMedal&quot;:false,&quot;Medal&quot;:null,&quot;ItemSku&quot;:&quot;418263&quot;,&quot;ParentCode&quot;:null,&quot;GaItemModel&quot;:{&quot;NameShort&quot;:&quot;Lolita Lempicka&quot;,&quot;UnitPrice&quot;:35.0300,&quot;Brand&quot;:&quot;Lolita Lempicka&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:&quot;Eau De Parfum Spray&quot;,&quot;Size&quot;:&quot;1 oz&quot;,&quot;AutoSku&quot;:&quot;418263&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;891W&quot;}},{&quot;ProductCode&quot;:&quot;CCA5BS&quot;,&quot;Name&quot;:&quot;Chrome&quot;,&quot;Brand&quot;:&quot;Azzaro&quot;,&quot;ImageUrl&quot;:&quot;https://img.fragrancex.com/images/products/sku/small/cca5bs.jpg&quot;,&quot;RedirectUrl&quot;:&quot;/products/_cid_cologne-am-lid_c-am-pid_94m__products.html&quot;,&quot;BrandUrl&quot;:&quot;/products/_bid_azzaro-am-lid_a__brands.html&quot;,&quot;CategoryLabel&quot;:&quot;Men\u0027s&quot;,&quot;Price&quot;:null,&quot;AvailableSizes&quot;:52,&quot;MinPrice&quot;:&quot;\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;2,233.43\u003c/bdo\u003e&quot;,&quot;Review&quot;:null,&quot;HasMedal&quot;:false,&quot;Medal&quot;:null,&quot;ItemSku&quot;:&quot;531459&quot;,&quot;ParentCode&quot;:null,&quot;GaItemModel&quot;:{&quot;NameShort&quot;:&quot;Chrome&quot;,&quot;UnitPrice&quot;:18.9900,&quot;Brand&quot;:&quot;Azzaro&quot;,&quot;Category&quot;:&quot;Cologne&quot;,&quot;Type&quot;:&quot;Body Spray&quot;,&quot;Size&quot;:&quot;5 oz&quot;,&quot;AutoSku&quot;:&quot;531459&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;94M&quot;}},{&quot;ProductCode&quot;:&quot;ACMDS&quot;,&quot;Name&quot;:&quot;Armani Code&quot;,&quot;Brand&quot;:&quot;Giorgio Armani&quot;,&quot;ImageUrl&quot;:&quot;https://img.fragrancex.com/images/products/sku/small/acmds.jpg&quot;,&quot;RedirectUrl&quot;:&quot;/products/_cid_cologne-am-lid_a-am-pid_60413m__products.html&quot;,&quot;BrandUrl&quot;:&quot;/products/_bid_giorgio--armani-am-lid_g__brands.html&quot;,&quot;CategoryLabel&quot;:&quot;Men\u0027s&quot;,&quot;Price&quot;:null,&quot;AvailableSizes&quot;:38,&quot;MinPrice&quot;:&quot;\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;3,651.80\u003c/bdo\u003e&quot;,&quot;Review&quot;:null,&quot;HasMedal&quot;:false,&quot;Medal&quot;:null,&quot;ItemSku&quot;:&quot;454027&quot;,&quot;ParentCode&quot;:null,&quot;GaItemModel&quot;:{&quot;NameShort&quot;:&quot;Armani Code&quot;,&quot;UnitPrice&quot;:31.0500,&quot;Brand&quot;:&quot;Giorgio Armani&quot;,&quot;Category&quot;:&quot;Cologne&quot;,&quot;Type&quot;:&quot;Deodorant Stick&quot;,&quot;Size&quot;:&quot;2.6 oz&quot;,&quot;AutoSku&quot;:&quot;454027&quot;,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;60413M&quot;}}]">
<script>
var recommendPool = [{
"ProductCode": "1MDK",
"Name": "1 Million",
"Brand": "Paco Rabanne",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/1mdk.jpg",
"RedirectUrl": "/products/_cid_cologne-am-lid_1-am-pid_63997m__products.html",
"BrandUrl": "/products/_bid_paco--rabanne-am-lid_p__brands.html",
"CategoryLabel": "Men\u0027s",
"Price": null,
"AvailableSizes": 21,
"MinPrice": "\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;351.65\u003c/bdo\u003e",
"Review": null,
"HasMedal": false,
"Medal": null,
"ItemSku": "465110",
"ParentCode": null,
"GaItemModel": {
"NameShort": "1 Million",
"UnitPrice": 2.9900,
"Brand": "Paco Rabanne",
"Category": "Cologne",
"Type": "Vial (sample)",
"Size": "0.03 oz",
"AutoSku": "465110",
"Currency": "USD",
"Qty": 1,
"ParentCode": "63997M"
}
}, {
"ProductCode": "RDDC",
"Name": "Red Door",
"Brand": "Elizabeth Arden",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/rddc.jpg",
"RedirectUrl": "/products/_cid_perfume-am-lid_r-am-pid_1099w__products.html",
"BrandUrl": "/products/_bid_elizabeth--arden-am-lid_e__brands.html",
"CategoryLabel": "Women\u0027s",
"Price": null,
"AvailableSizes": 64,
"MinPrice": "\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;1,122.00\u003c/bdo\u003e",
"Review": null,
"HasMedal": false,
"Medal": null,
"ItemSku": "441249",
"ParentCode": null,
"GaItemModel": {
"NameShort": "Red Door",
"UnitPrice": 9.5400,
"Brand": "Elizabeth Arden",
"Category": "Perfume",
"Type": "Deodorant Cream",
"Size": "1.5 oz",
"AutoSku": "441249",
"Currency": "USD",
"Qty": 1,
"ParentCode": "1099W"
}
}, {
"ProductCode": "VIVJW2",
"Name": "Viva La Juicy",
"Brand": "Juicy Couture",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/vivjw2.jpg",
"RedirectUrl": "/products/_cid_perfume-am-lid_v-am-pid_64143w__products.html",
"BrandUrl": "/products/_bid_juicy--couture-am-lid_j__brands.html",
"CategoryLabel": "Women\u0027s",
"Price": null,
"AvailableSizes": 39,
"MinPrice": "\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;1,965.27\u003c/bdo\u003e",
"Review": null,
"HasMedal": false,
"Medal": null,
"ItemSku": "553977",
"ParentCode": null,
"GaItemModel": {
"NameShort": "Viva La Juicy",
"UnitPrice": 16.7100,
"Brand": "Juicy Couture",
"Category": "Perfume",
"Type": "Duo Roller Ball Viva La Juicy + Viva La Juicy Rose",
"Size": "0.33 oz",
"AutoSku": "553977",
"Currency": "USD",
"Qty": 1,
"ParentCode": "64143W"
}
}, {
"ProductCode": "ACQ206073",
"Name": "Acqua Di Gio",
"Brand": "Giorgio Armani",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/acq206073.jpg",
"RedirectUrl": "/products/_cid_cologne-am-lid_a-am-pid_610m__products.html",
"BrandUrl": "/products/_bid_giorgio--armani-am-lid_g__brands.html",
"CategoryLabel": "Men\u0027s",
"Price": null,
"AvailableSizes": 43,
"MinPrice": "\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;4,145.76\u003c/bdo\u003e",
"Review": null,
"HasMedal": false,
"Medal": null,
"ItemSku": "416538",
"ParentCode": null,
"GaItemModel": {
"NameShort": "Acqua Di Gio",
"UnitPrice": 35.2500,
"Brand": "Giorgio Armani",
"Category": "Cologne",
"Type": "Deodorant Stick",
"Size": "2.6 oz",
"AutoSku": "416538",
"Currency": "USD",
"Qty": 1,
"ParentCode": "610M"
}
}, {
"ProductCode": "ANGTM8T",
"Name": "Angel",
"Brand": "Thierry Mugler",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/angtm8t.jpg",
"RedirectUrl": "/products/_cid_perfume-am-lid_a-am-pid_650w__products.html",
"BrandUrl": "/products/_bid_thierry--mugler-am-lid_t__brands.html",
"CategoryLabel": "Women\u0027s",
"Price": null,
"AvailableSizes": 157,
"MinPrice": "\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;7,959.88\u003c/bdo\u003e",
"Review": null,
"HasMedal": false,
"Medal": null,
"ItemSku": "561376",
"ParentCode": null,
"GaItemModel": {
"NameShort": "Angel",
"UnitPrice": 67.6800,
"Brand": "Thierry Mugler",
"Category": "Perfume",
"Type": "Eau De Toilette Spray",
"Size": "1 oz",
"AutoSku": "561376",
"Currency": "USD",
"Qty": 1,
"ParentCode": "650W"
}
}, {
"ProductCode": "LB42BSMM",
"Name": "Light Blue",
"Brand": "Dolce \u0026 Gabbana",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/lb42bsmm.jpg",
"RedirectUrl": "/products/_cid_cologne-am-lid_l-am-pid_884m__products.html",
"BrandUrl": "/products/_bid_dolce---am---gabbana-am-lid_d__brands.html",
"CategoryLabel": "Men\u0027s",
"Price": null,
"AvailableSizes": 32,
"MinPrice": "\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;3,276.62\u003c/bdo\u003e",
"Review": null,
"HasMedal": false,
"Medal": null,
"ItemSku": "547365",
"ParentCode": null,
"GaItemModel": {
"NameShort": "Light Blue",
"UnitPrice": 27.8600,
"Brand": "Dolce \u0026 Gabbana",
"Category": "Cologne",
"Type": "Body Spray",
"Size": "4.2 oz",
"AutoSku": "547365",
"Currency": "USD",
"Qty": 1,
"ParentCode": "884M"
}
}, {
"ProductCode": "ISMM14",
"Name": "L\u0027eau D\u0027issey (issey Miyake)",
"Brand": "Issey Miyake",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/ismm14.jpg",
"RedirectUrl": "/products/_cid_cologne-am-lid_l-am-pid_871m__products.html",
"BrandUrl": "/products/_bid_issey--miyake-am-lid_i__brands.html",
"CategoryLabel": "Men\u0027s",
"Price": null,
"AvailableSizes": 48,
"MinPrice": "\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;3,089.62\u003c/bdo\u003e",
"Review": null,
"HasMedal": false,
"Medal": null,
"ItemSku": "435234",
"ParentCode": null,
"GaItemModel": {
"NameShort": "L\u0027eau D\u0027issey (issey Miyake)",
"UnitPrice": 26.2700,
"Brand": "Issey Miyake",
"Category": "Cologne",
"Type": "Eau De Toilette Spray",
"Size": "1.3 oz",
"AutoSku": "435234",
"Currency": "USD",
"Qty": 1,
"ParentCode": "871M"
}
}, {
"ProductCode": "JEGMD",
"Name": "Jean Paul Gaultier",
"Brand": "Jean Paul Gaultier",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/jegmd.jpg",
"RedirectUrl": "/products/_cid_cologne-am-lid_j-am-pid_565m__products.html",
"BrandUrl": "/products/_bid_jean--paul--gaultier-am-lid_j__brands.html",
"CategoryLabel": "Men\u0027s",
"Price": null,
"AvailableSizes": 58,
"MinPrice": "\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;3,051.99\u003c/bdo\u003e",
"Review": null,
"HasMedal": false,
"Medal": null,
"ItemSku": "414344",
"ParentCode": null,
"GaItemModel": {
"NameShort": "Jean Paul Gaultier",
"UnitPrice": 25.9500,
"Brand": "Jean Paul Gaultier",
"Category": "Cologne",
"Type": "Deodorant Stick",
"Size": "2.6 oz",
"AutoSku": "414344",
"Currency": "USD",
"Qty": 1,
"ParentCode": "565M"
}
}, {
"ProductCode": "MLEMTS1",
"Name": "Montblanc Legend",
"Brand": "Mont Blanc",
"ImageUrl": "https://img.fragrancex.com/images/products/sku/small/mlemts1.jpg",
"RedirectUrl": "/products/_cid_cologne-am-lid_m-am-pid_69258m__products.html",
"BrandUrl": "/products/_bid_mont--blanc-am-lid_m__brands.html",
"CategoryLabel": "Men\u0027s",
"Price": null,
"AvailableSizes": 34,
"MinPrice": "\u003cbdo dir=\u0027ltr\u0027\u003eARS $\u0026nbsp;2,902.62\u003c/bdo\u003e",
"Review": null,
"HasMedal": false,
"Medal": null,
"ItemSku": "501723",
"ParentCode": null,
"GaItemModel": {
"NameShort": "Montblanc Legend",
"UnitPrice": 24.6800,
"Brand": "Mont Blanc",
"Category": "Cologne",
"Type": "Eau De Toilette Spray",
"Size": "1 oz",
"AutoSku": "501723",
"Currency": "USD",
"Qty": 1,
"ParentCode": "69258M"
}
}];
</script>
</section> --}}
</div>
</div>
<input id="UpdateText" name="UpdateText" type="hidden" value="Update">
<input id="RemoveText" name="RemoveText" type="hidden" value="REMOVE">
<input id="CurrencyAbbr" name="CurrencyAbbr" type="hidden" value="ARS">
</section>
<form action="/orders/cart" data-ajax="true" data-ajax-complete="initAfterCartAjaxLoad"
data-ajax-method="post" data-ajax-url="/widgets/carttable/ajaxcartable" id="ReloadCartAsyncForm"
method="post"><input id="continueUrl" name="continueUrl" type="hidden"
value="https://www.a.com/products/_cid_perfume-am-lid_l-am-pid_884w__products.html"></form>
<div>
<div class="xfactorshipping-wrapper">
<div class="c2-4-of-12">
<div><img class="lazy-img" src="https://img.fragrancex.com/images/search-loading.gif"
data-src="https://img.fragrancex.com/images/assets/icons/fastfreeshipping.svg"
width="60" height="60" alt=""></div>
<div>Delivery &amp; Returns</div>
<div>
<a href="#" class="cart-faq-link link-3">When will I get my order?
<div class="in">Choose speed on next page, most orders ship the same day.<div
class="line"></div>
</div>
</a>
<a href="#" class="cart-faq-link link-3">Any Taxes and Duties?
<div class="in">No tax in some states, some countries may collect duties, but most
do not.<div class="line"></div>
</div>
</a>
<a href="#" class="cart-faq-link link-3">Ship to PO Box/APO/FPO?
<div class="in">Sure, but delivery will take longer outside USA.<div
class="line"></div>
</div>
</a>
<a href="#" class="cart-faq-link link-3">Are products authentic?
<div class="in">All items are 100% original and authentic.<div class="line">
</div>
</div>
</a>
<a href="#" class="cart-faq-link link-3">How do I make a return?
<div class="in">Simply send it back to us, in USA email or call for a free return
label.<div class="line"></div>
</div>
</a>
</div>
</div>
<div class="c2-4-of-12">
<div><img class="lazy-img" src="https://img.fragrancex.com/images/search-loading.gif"
data-src="https://img.fragrancex.com/images/assets/icons/safesecure.svg"
width="60" height="60" alt=""></div>
<div>100% Safe and Secure</div>
<div>Your transactions are 100% safe and secure, encrypted with Secure Socket Layer (SSL) by
Verisign.
</div>
</div>
<div class="c2-4-of-12">
<div><img class="lazy-img" src="https://img.fragrancex.com/images/search-loading.gif"
data-src="https://img.fragrancex.com/images/assets/icons/customerservice.svg"
width="60" height="60" alt=""></div>
<div>Have a question?</div>
<div>
<div>Call us from 7AM - 4PM </div>
<div>Monday - Friday</div>
<div>In the Pakistan</div>
<div><a href="tel:03065111418 auto-tracked="true">0306-5111418</a></div>

</div>
</div>
</div>
</div>
<div class="shop-sliders bg-padding">
<div>
<form action="/widgets/previouslyviewed/ajaxpreviouslyviewed" data-ajax="true"
data-ajax-method="get" data-ajax-mode="replace"
data-ajax-success="initSlider('#AjaxPreviouslyViewed')"
data-ajax-update="#AjaxPreviouslyViewed" id="PreviousViewedAsyncForm" method="post"></form>
{{-- <section id="AjaxPreviouslyViewed">
<h3 class="title serif">Recently Viewed</h3>
<div class="slider">
<div class="slider-wrapper">
<div class="slider-content">
<div class="content-container">
<div class="content slide-0">
    <a href="/products/_cid_perfume-am-lid_l-am-pid_884w__products.html"
        class="click-box">
        <div>
            <picture class="lazy-img">
                <source
                    data-srcset="https://img.fragrancex.com/images/products/sku/small/884w.webp"
                    type="image/webp">
                <img src="https://img.fragrancex.com/images/search-loading.gif"
                    data-src="https://img.fragrancex.com/images/products/sku/small/884w.jpg"
                    width="206" height="206" alt="Light Blue">
            </picture>
        </div>
        <div class="desc-section">
            <div class="serif h3">
                Light Blue
            </div>
            <div>
                By Dolce &amp; Gabbana
            </div>
            <div class="product-review ">
                <div class="p-w-r">
                    <div class="pr-stars lazy-img">
                        <div class="stars-total lazy-img" style="width: 92%;">
                        </div>
                    </div>
                    <div class="review-count">
                        (<span>1735</span>)
                    </div>
                </div>
            </div>
            <div class="slider-price">
                <span>As low as</span> <bdo dir="ltr">ARS
                    $&nbsp;39.81</bdo>
            </div>
        </div>
    </a>
</div>
<input type="hidden" class="ga-item-model"
    value="{&quot;NameShort&quot;:&quot;Light Blue&quot;,&quot;UnitPrice&quot;:null,&quot;Brand&quot;:&quot;Dolce &amp; Gabbana&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:null,&quot;Size&quot;:null,&quot;AutoSku&quot;:null,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;884W&quot;}">
</div>
<div class="content-container">
<div class="content slide-1">
    <a href="/products/_cid_perfume-am-lid_p-am-pid_60332w__products.html"
        class="click-box">
        <div>
            <picture class="lazy-img">
                <source
                    data-srcset="https://img.fragrancex.com/images/products/sku/small/60332w.webp"
                    type="image/webp">
                <img src="https://img.fragrancex.com/images/search-loading.gif"
                    data-src="https://img.fragrancex.com/images/products/sku/small/60332w.jpg"
                    width="206" height="206" alt="Pink Sugar">
            </picture>
        </div>
        <div class="desc-section">
            <div class="serif h3">
                Pink Sugar
            </div>
            <div>
                By Aquolina
            </div>
            <div class="product-review ">
                <div class="p-w-r">
                    <div class="pr-stars lazy-img">
                        <div class="stars-total lazy-img" style="width: 92%;">
                        </div>
                    </div>
                    <div class="review-count">
                        (<span>1053</span>)
                    </div>
                </div>
            </div>
            <div class="slider-price">
                <span>As low as</span> <bdo dir="ltr">ARS
                    $&nbsp;2.99</bdo>
            </div>
        </div>
    </a>
</div>
<input type="hidden" class="ga-item-model"
    value="{&quot;NameShort&quot;:&quot;Pink Sugar&quot;,&quot;UnitPrice&quot;:null,&quot;Brand&quot;:&quot;Aquolina&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:null,&quot;Size&quot;:null,&quot;AutoSku&quot;:null,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;60332W&quot;}">
</div>
<div class="content-container">
<div class="content slide-2">
    <a href="/products/_cid_perfume-am-lid_o-am-pid_1002w__products.html"
        class="click-box">
        <div>
            <picture class="lazy-img">
                <source
                    data-srcset="https://img.fragrancex.com/images/products/sku/small/1002w.webp"
                    type="image/webp">
                <img src="https://img.fragrancex.com/images/search-loading.gif"
                    data-src="https://img.fragrancex.com/images/products/sku/small/1002w.jpg"
                    width="206" height="206" alt="Obsession">
            </picture>
        </div>
        <div class="desc-section">
            <div class="serif h3">
                Obsession
            </div>
            <div>
                By Calvin Klein
            </div>
            <div class="product-review ">
                <div class="p-w-r">
                    <div class="pr-stars lazy-img">
                        <div class="stars-total lazy-img" style="width: 92%;">
                        </div>
                    </div>
                    <div class="review-count">
                        (<span>923</span>)
                    </div>
                </div>
            </div>
            <div class="slider-price">
                <span>As low as</span> <bdo dir="ltr">ARS
                    $&nbsp;24.68</bdo>
            </div>
        </div>
    </a>
</div>
<input type="hidden" class="ga-item-model"
    value="{&quot;NameShort&quot;:&quot;Obsession&quot;,&quot;UnitPrice&quot;:null,&quot;Brand&quot;:&quot;Calvin Klein&quot;,&quot;Category&quot;:&quot;Perfume&quot;,&quot;Type&quot;:null,&quot;Size&quot;:null,&quot;AutoSku&quot;:null,&quot;Currency&quot;:&quot;USD&quot;,&quot;Qty&quot;:1,&quot;ParentCode&quot;:&quot;1002W&quot;}">
</div>
</div>
</div>
<div class="slider-circles">
<div>
<span class="item-select slider-0   checked">

</span>
</div>
<div>
<span class="item-select slider-1 "></span>
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
<div class="next" disabled="disabled">
<button data-slide="1" class="review-nav" disabled="disabled">
<img class="next lazy-img"
    src="https://img.fragrancex.com/images/search-loading.gif"
    data-src="https://img.fragrancex.com/images/assets/ui/sliderleft.svg"
    width="50" height="50" alt="View Next Items" disabled="disabled">
</button>
</div>
</div>
</div>
</section> --}}
</div>
</div>
</div>
</section>
</div>
@push('child-scripts')
<script type="text/javascript">
// updating cart

$(document).on('change', '.cart-qty-select', function() {

var qty = $(this).find('option:selected').val();
var product_id = $(this).attr('product-id');
var url = "{{ route('front.update.cart') }}";

$.ajax({

headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},

type: "patch",
data: {
id: product_id,
qty: qty
},
url: url,

success: function(response) {

if (response.success == true) {

$('.all_total').html(response.all_total);
$('.total-items').html(response.total_items);
$('.partial_total_'+response.id).html(response.partial_total);
$('.add-total-items').html(response.total_items);

// alert(response.all_total);


} else {

return false;
}




}

});

});
// Removing from cart

// $(document).on('click', '.remove-cart', function(e) {
// e.preventDeafult();

// alert('hihihihhi');
    
    
// var product_id = $(this).attr('id');
// var url = "{{ route('front.remove.from.cart') }}";



// // alert(product_id);
// // return false;

// $.ajax({

// type: "get",
// data: {
// id: product_id
// },
// url: url,

// success: function(response) {

// if (response.success == true && response.item == true) {

// const Toast = Swal.mixin({
// toast: true,
// position: 'top-end',
// showConfirmButton: false,
// timer: 3000,
// timerProgressBar: true,
// });

// Toast.fire({
// icon: 'success',
// title: 'Item has been deleted!'
// });

// location.href = "/cart";


// }
// if (response.success == true) {

// $('.put-remove-content-here').html(response.view);
// }




// }

// });

// });
</script>
@endpush

<!-- main sec  ends-->
@endsection
