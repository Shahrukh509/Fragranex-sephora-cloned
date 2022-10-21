@extends('frontend.layouts.master')
@section('title')
   Order Sccessful
@endsection
@section('meta_title')
    Order Sccessful
@endsection
@section('meta_description')
     Order Sccessful
@endsection
@section('meta_keyword')
    Order Sccessful
@endsection

@section('content')
    <!-- main sec -->
    @php
    $user = \App\Models\User::where('ip_address',request()->ip())->first();
    $order = \App\Models\Order::where('id',Session::get('order_id'))->first();
    // dd($order);
    @endphp
    @if($order)
    <div role="main" id="content">
        <section>
            <div class="confirmation-page-container std-side-padding ">
                <div class="limit-width">
                    <section id="confirmation-form-section">
                    </section>
                    <div class="ErrorMessageBox">
                        <div class="validation-summary-errors">
                            <span class="validation-error">
                            </span>
                        </div>
                    </div>
                    <h1 class="h2 thank-msg gets-vertical-padding">
                        Thank you for your order!
                    </h1>
                    @if(!$user->password)
                    <section id="ConfirmationNewAccount" class="noprint">
                        <div class="c-12-of-12">
                            {{-- <form action="/widgets/confirmationnewaccount/confirmationnewaccount" data-ajax="true"
                                data-ajax-method="post" data-ajax-mode="replace"
                                data-ajax-update="#ConfirmationNewAccountAsyncSection"
                                data-ajax-url="/widgets/confirmationnewaccount/ajaxcreatenewaccount" id="form0"
                                method="post" novalidate="novalidate"> --}}
                                <h5><strong>Enter a friendly password you can remember next time you login
                                        (optional):</strong></h5>
                                <div class="error-text">
                                    <div class="validation-summary-valid" data-valmsg-summary="true">
                                        <ul>
                                            <li style="display:none"></li>
                                        </ul>
                                    </div>
                                </div>
                                <span>Type Password</span>
                                <input class="input_medium mbn5 input-validation-error" id="Password"
                                    name="password" type="password" required>
                                     <span>Re-enter Password</span>
                                     <input class="input_medium mbn5 input-validation-error" id="ConfirmPassword"
                                     name="confirmpassword" type="password"required>
                                     <span class="error-password"></span>
                                     <input type="submit" value="Submit" class="btn-type-2" id="submitpassword" user-id = "{{ $user->id }}">
         
                                    <br>
                            {{-- </form> --}}
                        </div>
                    </section>
                    @endif
                  
                    <div class="mq4show">
                        <div class="title gets-vertical-padding">
                            <div class="c3-6-of-12">
                                <span> Order Confirmation</span>
                            </div>
                            <div class="c3-6-of-12 mq3-show">
                                <div class="print">
                                    <a class="btn-type-3" href="javascript:window.print()">print</a>
                                </div>
                            </div>
                        </div>
                       
                        <div class="gets-vertical-padding addr-section">
                            <div>
                                <div class="h4">Your Order Tracking No #{{ $order->tracking_number }} </div>
                                <div>{{ $order->created_at->format('d M h:i:s') }}</div>
                            </div>
                            <div class="c3-4-of-12 bill-addr gets-vertical-padding">
                                <h4 class="h4">
                                    Billing Address
                                </h4>
                                {{ $order->address_1?? $order->address_2 }}
                                <br>
                                Your Billing  Email Address: 
                                <strong>{{ $order->email??'' }}</strong>
                            </div>
                            <div class="c3-4-of-12 ship-addr gets-vertical-padding">
                                <h4 class="h4">
                                    Shipping Address
                                </h4>
                                {{ $user->address_1??$user->address_2 }}
                              
                                <br>
                                Your Shipping Email Address:
                                <strong>{{ $user->email??'' }}</strong>
                            </div>
                            <div class="c3-4-of-12 payment">
                                <div class="gets-vertical-padding">
                                    <h4 class="h4">Payment Method</h4>
                                    {{ $order->payment_method }}<br>
                                </div>
                                <div class="gets-vertical-padding">
                                    <h4 class="h4">Shipping Method</h4>
                                    Shipping<br>
                                </div>
                            </div>
                        </div>
                        <div>
                            <section class="summary gets-vertical-padding">
                                <div class="cart-item-section">
                                    <div class="cart-grid">
                                        <div class="cart-col-header show-mq-4">
                                            <div
                                                class="c3-3-of-12 c5-2-of-12 grey-header                                                           c4-3-of-12 ">
                                                Product Information
                                            </div>
                                            <div
                                                class="c3-9-of-12 c5-10-of-12                                                c4-9-of-12
    ">
                                                <div
                                                    class="c5-4-of-12 info-div                                                 c4-4-of-12
    ">
                                                </div>
                                                <div
                                                    class="c5-8-of-12 price-div                                                  c4-8-of-12
    ">
                                                    <div
                                                        class="c5-5-of-12 price-wrapper-header                                                                 c4-5-of-12
    ">
                                                        <div class="grey-header price-header">Price</div>
                                                    </div>
                                                    <div
                                                        class="c5-3-of-12 qty-container-header                                                                 c4-3-of-12
    ">
                                                        <div class="grey-header">Quantity</div>
                                                    </div>
                                                    <div
                                                        class="c5-4-of-12 total-wrapper-header                                                                 c4-4-of-12
    ">
                                                        <div class="grey-header">Total</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cartitems-padding">
                                          @foreach($order->orderDetail as $detail)

                                          

                                          {{-- {{ dd($detail->variable_product->product->brand->slug); }} --}}
                                            <div class="cart-item-wrapper nonmessage cart-product">
                
        
                                                <div class="c0-5-of-12 c-4-of-12 c3-3-of-12 c5-2-of-12 item-img">
                                                    <a href="{{ route('front.product.show',[$detail->variable_product->product->brand->slug,$detail->variable_product->slug]) }}"
                                                        aria-label="Light Blue by Dolce &amp; Gabbana 0.8 oz Eau De Toilette Spray for Women">
                                                        <picture>
                                                            <source
                                                                srcset="{{ asset($detail->variable_product->image->path??$detail->variable_product->product->image->path) }}"
                                                                type="image/webp">
                                                            <img src="{{ asset($detail->variable_product->image->path??$detail->variable_product->product->image->path) }}"
                                                                height="218"
                                                                width="218">
                                                        </picture>
                                                    </a>
                                                </div>
      
                                                <div class="c0-7-of-12 c-8-of-12 c3-9-of-12 c5-10-of-12 item-content">
                                                    <div
                                                        class="c2-6-of-12 c5-4-of-12 info-div                                                        c4-4-of-12
    ">
                                                        <h2 class="cart-item-name serif ">
                                                            <span>{{ $detail->variable_product->product->name??'' }}</span>
                                                        </h2>
                                                        <div class="cart-item-brand">by {{$detail->variable_product->product->brand->name  }}</div>
                                                        <div class="cart-item-sku mtn">Item #{{ $detail->variable_product->id??'' }}</div>
                                                        <div class="cart-item-size">
                                                           {{ $detail->variable_product->size??'' }} {{ $detail->variable_product->type->name??'' }}
                                                        </div>
                  
                                          
                                                    </div>
                                                    <div
                                                        class="c2-6-of-12 c5-8-of-12 price-div c4-8-of-12">
                                                        <div
                                                            class="c2-12-of-12 c5-7-of-12 column-wrapper mq2none price-wrapper">
                                                            <div class="price-section">
                                                                <div class="price-text c c2-3-of-12 c5-12-of-12">
                                                                    <span><bdo dir="ltr">Rs {{ number_format($detail->variable_product->price)??''  }}</bdo></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c2-12-of-12 c5-5-of-12 column-wrapper mq2show price-wrapper c4-5-of-12">
                                                            <div class="price-section">
                                                                <div class="grey-label">Price</div>
                                                                <div class="price-text c c2-3-of-12 c5-12-of-12">
                                                                    <span><bdo dir="ltr">Rs {{ number_format($detail->variable_product->price)??''  }}</bdo></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c2-12-of-12 c5-3-of-12 column-wrapper qty-container c4-3-of-12
    ">
                                                            <div class="grey-label">Quantity<span
                                                                    class="mq4none">:&nbsp;</span> </div>
                                                            
                                                            <div>
                                                                {{ $detail->quantity??'' }}
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="c5-4-of-12 column-wrapper mq4show total-wrapper                                                                             c4-4-of-12
    ">
                                                            <div class="price-section">
                                                                <div class="price-text c c2-3-of-12 c5-12-of-12">
                                                                    <span><bdo dir="ltr">Rs {{ number_format($detail->price * $detail->quantity )??'' }}</bdo></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach()
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-summary-wrapper bg-padding">
                                  
                                    @if($order->order_type == 'gift')
                                    <div class="shipping-section">
                                     
                                        <div class="c-6-of-12">Gift charges</div>
                                        <div class="c-6-of-12"><bdo dir="ltr">Rs 500</bdo></div>
                                    </div>
                                    @endif
                                    {{-- <div class="shipping-section">
                                        <div class="c-6-of-12">Shipping</div>
                                        <div class="c-6-of-12"><bdo dir="ltr">$&nbsp;350.00</bdo></div>
                                    </div> --}}
                                    <div class="line"></div>
                                    <div class="total-section">
                                        <div class="c-6-of-12">
                                            Shipping charges for your city is
                                        </div>
                                        <div class="c-6-of-12"><bdo dir="ltr">Rs {{ Session::get('shipping_charges') }} </bdo>
                                        </div>
                                        <div class="c-6-of-12">
                                            Total 
                                        </div>
                                        <div class="c-6-of-12 " style="padding-left:570px;" ><bdo dir="ltr">Rs {{($order->order_type == 'gift')?$order->total_amount+500: $order->total_amount }}</bdo>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="mobile-wrapper gets-vertical-padding mq4none">
        <p>
            Your Order Tracking No #{{ $order->tracking_number }} . We hope you enjoyed shopping with us.
        </p>
        <div class="c-12-of-12 gets-vertical-padding">
        <div class="ship-info-container c-9-of-12">
        <strong> Shipping to {{ $order->city??'' }}</strong>
        <br>
        <strong> Address: {{ $order->address_1??$order->address_2 }}</strong>
    
        </div>
        <div class="cart-detail-container c-3-of-12">
         @foreach($order->orderDetail as $detail)

        <a href="{{ route('front.product.show',[$detail->variable_product->product->brand->slug,$detail->variable_product->slug]) }}">
        <picture>
        <source srcset="{{ asset($detail->variable_product->image->path??$detail->variable_product->product->image->path) }}" type="image/webp">
        <img src="{{ asset($detail->variable_product->image->path??$detail->variable_product->product->image->path) }}">
        </picture>
       
        </a>
       
        @endforeach

        <section>
    
            <p>Shipping charges for your city is Rs <strong>{{ Session::get('shipping_charges') }}</strong></p>
            <p>Total is Rs <strong>{{ number_format($order->total_amount??'') }}</strong> </p>
          
        </section>

        </div>
        </div>
        <div class="button-container c-12-of-12 gets-vertical-padding">
        <div class="c-12-of-12">
        </div>
        <div class="c-12-of-12" href="#" aria-label="Continue Shopping">
        <a class="btn-type-2" href="{{ route('front.home') }}">Continue Shopping</a>
        </div>
        </div>
        </div>



    @else
    Your Cart is empty :(
    @endif

    <!-- main sec  ends-->
@endsection
@push('child-scripts')
<script>
  $(document).on('keyup','#ConfirmPassword',function(){
    var password = $('#Password').val();
    var cpassword = $('#ConfirmPassword').val();
    if(password == cpassword){

      $('.error-password').css({"color":"green"}).text('Password Matched');

    }else{
      $('.error-password').css({"color":"red"}).text('Password does not matched');


    }

  });

  $(document).on('click','#submitpassword',function(){
     
    var password = $('#Password').val();
    var cpassword = $('#ConfirmPassword').val();
    var id = $(this).attr('user-id');
    var url = "{{ route('front.save.password') }}";

    // alert(url);
    if(!password && !cpassword ){
    alert('Password must be not empty');
    }
    else{
      $.ajax({

      type: "get",
      data: {
      id: id,password:password
      },
      url: url,

      success: function(response) {

      if (response.success == true) {

            Swal.fire({
          icon: 'success',
          title: 'Your Email is '+response.email,
          text: 'Password is '+response.password,
          confirmButton:true

        });


     


      }else{

        Swal.fire({
          icon: 'error',
          title: 'Something went wrong'
        });

      }

      }

      });
    }
  });
  $(document).ready(function() {
    url = "{{ route('front.show.checkout.detail') }}";
        window.history.pushState(url, "", window.location.href);        
        window.onpopstate = function() {
            window.history.pushState(url, "", window.location.href);
        };
    });
</script>
@endpush
