@extends('admin.layouts.master')

@push('css')

@endpush

@section('content')
<div class="container mt-5 mb-3" >
  <div class="row d-flex justify-content-center">
    <button class="btn btn-danger" id="print"> Print This</button>
      <div class="col-md-8">
          <div class="card" id="print_area">
              <div class="d-flex flex-row p-2"> <img src="https://img.freepik.com/free-vector/minimal-yellow-invoice-template-vector-design_1017-12070.jpg?w=2000" width="48">
                  <div class="d-flex flex-column"> <span class="font-weight-bold">Invoice</span> <small>INV-{{ $order->id }}</small> </div>
              </div>
              <hr>
              <div class="table-responsive p-2">
                  <table class="table table-borderless">
                      <tbody>
                          <tr class="add">
                              <td>Order Tracking No#</td>
                              <td>Billing Address</td>
                              <td>City</td>
                              <td>Payment Method</td>

                          </tr>
                          <tr class="content">
                              <td class="font-weight-bold">{{ $order->tracking_number??'' }}</td>
                              <td class="font-weight-bold content-wrap">{{ $order->address_1?? $order->address_2 }}</td>
                              <td class="font-weight-bold">{{ $order->city??'' }}</td>
                              <td class="font-weight-bold">{{ $order->payment_method??'' }}</td>
                            
                          </tr>
                      </tbody>
                  </table>
              </div>
              <hr>
              <div class="products p-2">
                  <table class="table table-borderless">
                      <tbody>
                          <tr class="add">
                              <td>Product</td>
                              <td>Sku</td>
                              <td>Size</td>
                              <td>Qty</td>
                              <td>Price</td>
                            
                          </tr>
                          @foreach($order_detail as $detail)
                          <tr class="content">
                              <td>{{ $detail->variable_product->product->name??'' }}</td>
                              <td>{{ $detail->variable_product->sku??'' }}</td>
                              <td>{{ $detail->variable_product->size??'' }}</td>
                              <td>{{ $detail->quantity??'' }}</td>
                              <td class="text-center">{{ $detail->price??'' }}</td>
                          </tr>

                          @endforeach
                          
                      </tbody>
                  </table>
              </div>
              <hr>
              <div class="products p-2">
                  <table class="table table-borderless">
                      <tbody>
                          <tr class="add">
                            <td class="text-center">Shipping Charges</td>
                              <td class="text-center">Total</td>
                          </tr>
                    
                          <tr class="content">
                            <td class="text-center">Rs {{ Session::get('shipping_charges') }}</td>
                              <td class="text-center">Rs {{ number_format($order->total_amount??'') }}</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <hr>
              <div class="address p-2">
                  {{-- <table class="table table-borderless">
                      <tbody>
                          <tr class="add">
                              <td>Bank Details</td>
                          </tr>
                          <tr class="content">
                              <td> Bank Name : ADS BANK <br> Swift Code : ADS1234Q <br> Account Holder : Jelly Pepper <br> Account Number : 5454542WQR <br> </td>
                          </tr>
                      </tbody>
                  </table> --}}
              </div>
          </div>
      </div>
  </div>
</div>

    {{-- Footer here  --}}
@endsection

@push('script')
<script>
                            // submitting form
$(document).on('click','#print',function(e){

  e.preventDefault();

  printData();


});

function printData()
{
   var divToPrint=document.getElementById("print_area");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>
@endpush
