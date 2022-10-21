@extends('admin.layouts.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Shipping Table</h6>
         
        </div>
        <div class="row">

          <div class="col-lg-10 col-md-10 col-sm-10">

          </div>
          <div class="col-lg-2 col-md-2 col-dm-2">
            <a class="add_product_tag" href="{{ route('admin.show.add.shipping') }}"><span class="badge badge-sm bg-gradient-success"><i class="fas fa-plus"> Add shipping</i></span></a>
          </div>


        </div>
       
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 table table-striped table-bordered table-hover" id="table">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Country</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">City</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Charges</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-secondary opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($shippings as $shipping)
              <tr>
                <td>

                  <p class="text-xs font-weight-bold mb-0 shipping-id">{{ $shipping->id??'' }}</p>

                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0 shipping-id">{{ $shipping->country??'' }}</p>
                </td>

                <td>
                  <p class="text-xs font-weight-bold mb-0 shipping-id">{{ $shipping->city??'' }}</p>
                </td>

                <td>
                  <p class="text-xs font-weight-bold mb-0 shipping-id">{{ $shipping->charges??'' }}</p>
                </td>
      
                <td class="align-middle text-center text-sm status">
                  <span class="badge badge-sm bg-gradient-{{ ($shipping->status)?'success':'danger' }}">{{ ($shipping->status)?'Active':'Inactive' }}</span>
                </td>
                <td class="align-middle">
                  <a href="{{ route('admin.show.update.shipping',[$shipping->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit shipping">
                    <i class="fas fa-user-edit text-warning"></i> | &nbsp;
          
                      <a href="{{ route('admin.delete.shipping',[$shipping->id]) }}" onclick="return confirm('Are you sure to delete this?')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip">
                        <i  class="fas fa-trash-alt text-danger"></i>
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

<div style="
--bs-modal-width: 700px;" class="modal fade" id="viewshipping" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View shipping</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label> ID </label>
        <p id="id"></p>

        <label> Position </label>
        <p id="position"></p>

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
$(document).on('click','.view-shipping',function(){
 
  var id = $(this).attr('data-id');
  url = "{{ route('admin.show.shipping.list') }}";

  $.ajax({
    url:url,
    data:{id:id},
    success:function(response){

      $('.modal-body #position').html(response.position);
      $('.modal-body #id').html(response.id);
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
