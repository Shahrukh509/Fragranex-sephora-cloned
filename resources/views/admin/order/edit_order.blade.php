@extends('admin.layouts.master')

@section('content')
<div class="container">
  <form id="edit-order-form" action="{{ route('admin.update.order') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $order->id??'' }}">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <u class="text-color"><h4 class="text-color">Edit Order</h4></u>

    <div class="form-control">
    <label for="fname">Tracking NO#</label>
    <input type="number" id="mt" name="tracking_number" value="{{ $order->tracking_number??'' }}">
    <span class="text-danger error-text tracking_number_error"></span>
   </div>
  <div class="form-control">
    <label for="fname">Email</label>
    <input type="email" id="mt" name="email" value="{{ $order->email??'' }}">
    <span class="text-danger error-text email_error"></span>
    
  </div>
  <div class="form-control">
    <label for="fname">First Name</label>
    <input type="text" id="mt" name="first_name" value="{{ $order->first_name??'' }}">
    <span class="text-danger error-text first_name_error"></span>
  </div>
  <div class="form-control">
    <label for="fname">Last Name</label>
    <input type="text" id="mt" name="last_name" value="{{ $order->last_name??'' }}">
    <span class="text-danger error-text last_name_error"></span>
  </div>

  <div class="form-control">
    <label for="fname">Address 1</label><br>
    <textarea name="address_1" cols="30" rows="4">{{ $order->address_1??'' }}</textarea>
    <span class="text-danger error-text address_1_error"></span>

  </div>

  <div class="form-control">
    <label for="fname">Address 2</label><br>
    <textarea name="address_2" id="description" cols="30" rows="4">{{ $order->address_2??'' }}</textarea>

  </div>

  <div class="form-control">
    <label for="fname">House No</label>
    <input type="text" id="mt" name="house_no" value="{{ $order->house_no??'' }}">
  </div>

  <div class="form-control">
    <label for="fname">Near Location</label>
    <input type="text" id="mt" name="near_location" value="{{ $order->near_location??'' }}">
  </div>

  <div class="form-control">
    <label for="fname">City</label>
    <input type="text" id="mt" name="city" value="{{ $order->city??'' }}">
    <span class="text-danger error-text city_error"></span>
  </div>

  <div class="form-control">
    <label for="fname">State/Province</label>
    <input type="text" id="mt" name="state_province" value="{{ $order->state_province??'' }}">
  </div>

  <div class="form-control">
    <label for="fname">Zip Code</label>
    <input type="number" id="mt" name="zip_code" value="{{ $order->zip_code??'' }}">
  </div>

  <div class="form-control">
    <label for="fname">Country</label>
    <input type="text" id="mt" name="country" value="{{ $order->country??'' }}">
  </div>

  <div class="form-control">
    <label for="fname">Phone</label>
    <input type="number" id="mt" name="phone" value="{{ $order->phone??'' }}">
    <span class="text-danger error-text phone_error"></span>
  </div>

  <div class="form-control">
    <label for="featured">Order Type</label>
    <select id="status" name="order_type">
      <option disabled>Select Order Type</option>
      <option  >Normal</option>
      <option {{ ($order->order_type == 'gift')? 'selected':'' }}>Gift</option>
      
      
    </select>

    <span class="text-danger error-text order_type_error"></span>

  </div>

  <div class="form-control">
    <label for="featured">Payment Method</label>
    <select id="status" name="payment_method">
      <option disabled>Select Payment Method</option>
      <option {{ ($order->payment_method == 'Bank Transfer')? 'selected':'' }}>Bank Transfer</option>
      <option {{ ($order->payment_method == 'COD')? 'selected':'' }}>COD</option>
      
      
    </select>
    <span class="text-danger error-text payment_method_error"></span>
  </div>

  <u class="text-color"><h4 class="text-color">Order Details</h4></u>
 @foreach($order->orderDetail as $key=>$detail)

  <div class="form-control">
    <span>{{ $key+1 }}.</span> <label for="fname"> Product Name</label>
    <input type="text" id="mt" name="product_name" value="{{ $detail->variable_product->product->name??'' }}" readonly>
 
  </div>

  <div class="form-control">
    <label for="fname">Product size</label>
    <input type="text" id="mt" name="variation_size" value="{{ $detail->variable_product->size??'' }}" readonly>

  </div>

  @endforeach



  <div class="form-control">
    <label for="fname">Total Amount</label>
    <input type="number" id="mt" name="total_amount" value="{{ $order->total_amount??'' }}">
    <span class="text-danger error-text total_amount_error"></span>
  </div>
  
  <div class="form-control">
    <label for="featured">Select Status</label>
    <select id="status" name="status">
      <option disabled>Select Status</option>
      <option value="1" {{ ($order->status == 1)? 'selected':'' }}>Completed</option>
      <option value="0" {{ ($order->status == 0)? 'selected':'' }}>Pending</option>
      <option value="2" {{ ($order->status == 2)? 'selected':'' }}>Cancelled</option>
      
      
    </select>
    <span class="text-danger error-text status_error"></span>
  </div>
  
    <button class="text-white bg-gradient-primary" type="submit">Edit order</button>
  </form>
</div>

    {{-- Footer here  --}}
@endsection

@push('script')
<script>
                            // submitting form
$(document).on('submit','#edit-order-form',function(e){

  e.preventDefault();

  var url = $(this).attr('action');
  $.ajax({

    headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    type:"post",
    contentType: false,
    processData: false,
    url: url,
    data: new FormData(this),
    beforeSend:function(){
      Swal.fire({
              title: "Your order is being edited",
              text: "Please wait",
              imageUrl: "https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/eb7e7769321565.5ba1db95aab9f.gif",
              showConfirmButton: false,
              allowOutsideClick: false
            });

      $(document).find('span.error-text').text("");

    },
    success:function(response){

    if(response.status == true){
      const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 2000,
      timerProgressBar: true,
      });

      Toast.fire({
      icon: 'success',
      title: 'order has been updated!'
      }).then(function(){


        setInterval(() => {

          location.href="{{ route('admin.show.order.list') }}";
          
        }, 1000);
      });


     


    }
    if(response.status == false){

       $.each(response.error,function(prefix,val){

        $('span.'+prefix+'_error').text('*'+val);
        // $('span.'+prefix+'_error').focus();


          

       });
       swal.close();

    }
  


      



    }

  });

});
</script>
@endpush
