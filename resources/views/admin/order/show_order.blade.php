@extends('admin.layouts.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Order table</h6>
         
        </div>
        <div class="row">

          <div class="col-lg-10 col-md-10 col-sm-10">

          </div>
          {{-- <div class="col-lg-2 col-md-2 col-dm-2">
            <a class="add_product_tag" href="{{ route('admin.show.add.order') }}"><span class="badge badge-sm bg-gradient-success"><i class="fas fa-plus"> Add order</i></span></a>
          </div> --}}


        </div>
       
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 table table-striped table-bordered table-hover" id="table">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order Tracking No#</th>
          
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-secondary opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $order)
              <tr>
                <td>

                  <p class="text-xs font-weight-bold mb-0 order-id">{{ $order->id??'' }}</p>

                </td>

                <td>

                  <p class="text-xs font-weight-bold mb-0 order-id">{{ $order->first_name??'' }}</p>

                </td>
                <td>

                  <p class="text-xs font-weight-bold mb-0 order-id">{{ $order->tracking_number??'' }}</p>

                </td>

                <td>

                  <p class="text-xs font-weight-bold mb-0 order-id">{{ number_format($order->total_amount??'') }}</p>

                </td>
  
              
                <td class="align-middle text-center text-sm status">
                  <span class="badge badge-sm bg-gradient-{{ ($order->status ==1)? 'success' : (($order->status ==0)? 'danger' : 'dark') }}">{{ ($order->status == 0)? 'Pending': (($order->status == 1)? 'Completed':'Cancelled') }}</span>
                </td>
                <td class="align-middle">
                  <a href="{{ route('admin.show.update.order',[$order->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit order">
                    <i class="fas fa-user-edit text-warning"></i> | &nbsp;
                    {{-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs view-order" data-bs-toggle="modal" data-id="{{ $order->id }}" data-bs-target="#vieworder">
                      <i class="fas fa-eye text-info"></i> | &nbsp; --}}
                     
                        <a href="{{ route('admin.delete.order',[$order->id]) }}" onclick="return confirm('Are you sure to delete this?')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip">
                          <i  class="fas fa-trash-alt text-danger"></i> | &nbsp;

                          <a href="{{ route('admin.order.print',[$order->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip">
                            <i class="fa fa-print" aria-hidden="true"></i>
                  </a>
                </td>
              </tr>
              @endforeach
              
             
            </tbody>

          
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="--bs-modal-width: 700px;" class="modal fade" id="vieworder" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body">

        <label> Customer Name </label>
        <p id="name"></p>

        <label> Order Tracking No </label>
        <p id="tracking"></p>

        <label> Email </label>
        <p id="email"></p>

        <label> Address</label>
        <p id="address"></p>

        <label> City</label>
        <p id="city"></p>

        <label> Phone</label>
        <p id="phone"></p>

        <label> Billing Type</label>
        <p id="bill"></p>

        <label> Order Type</label>
        <p id="order"></p>
        
        <label> Payment Method</label>
        <p id="method"></p>

        <label> Total Amount</label>
        <p id="amount"></p>

        <label> Status</label>
        <p id="status"></p>
        
        

    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  
      </div>
    </div>
  </div>
</div>
{{-- @endforeach --}}


    {{-- Footer here  --}}
@endsection

@push('script')


<script>
$(document).on('click','.view-order',function(){

  var id = $(this).attr('data-id');
  url = "{{ route('admin.show.order.list') }}";
  $('#data-table tbody').empty();

  $.ajax({
    url:url,
    data:{id:id},
    success:function(response){

      $('.modal-body #name').html(response.name);
      $('.modal-body #tracking').html(response.tracking);
      $('.modal-body #email').html(response.email);
      $('.modal-body #address').html(response.address);
      $('.modal-body #city').html(response.city);
      $('.modal-body #phone').html(response.phone);
      $('.modal-body #bill').html(response.bill);
      $('.modal-body #order').html(response.order);
      $('.modal-body #method').html(response.method);
      $('.modal-body #amount').html(response.total);
      $('.modal-body #status').html(response.status);


    }
  })

});

$(document).ready(function() {
    $('#table').dataTable({

      processing: true,
        serverSide: false,
        "order": [[ 0, "desc" ]]
    });
} );

</script>
    
@endpush
