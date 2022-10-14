@extends('admin.layouts.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">review table</h6>
         
        </div>
        <div class="row">

          <div class="col-lg-10 col-md-10 col-sm-10">

          </div>
          {{-- <div class="col-lg-2 col-md-2 col-dm-2">
            <a class="add_product_tag" href="{{ route('admin.show.add.review') }}"><span class="badge badge-sm bg-gradient-success"><i class="fas fa-plus"> Add review</i></span></a>
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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rating</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-secondary opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($reviews as $review)
              <tr>
                <td>

                  <p class="text-xs font-weight-bold mb-0 review-id">{{ $review->id??'' }}</p>

                </td>
                <td>

                  <p class="text-xs font-weight-bold mb-0 review-id">{{ $review->order->user->first_name??'' }}</p>

                </td>

                <td>

                  <p class="text-xs font-weight-bold mb-0 review-id">{{ $review->order->OneOrderDetail->variable_product->product->name??'' }}</p>

                </td>
                <td>
                  <div class="stars-total">
                    {!! str_repeat('<i class="fa fa-star" aria-hidden="true" style="color:orange"></i>', $review->rating) !!}
                    {!! str_repeat('<i class="fa fa-star-o" aria-hidden="true"></i>', 5 - $review->rating) !!}</div>
                </td>
  
                
      
                <td class="align-middle text-center text-sm status">

                  <select id="status" name="status" re-id={{ $review->id }}>
                    <option disabled selected>Select Status</option>
                    <option value="1"{{ ($review->status)? 'selected':'' }}><span class="badge badge-sm bg-gradient-success">Active</span></option>
                    <option value="0"{{ (!$review->status)? 'selected':'' }}><span class="badge badge-sm bg-gradient-danger">Inactive</span></option>
                    
                    
                  </select>
                  
              
                </td>
                <td class="align-middle">
                    
                      <a href="{{ route('admin.delete.review',[$review->id]) }}" onclick="return confirm('Are you sure to delete this?')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip">
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

<div style="--bs-modal-width: 700px;" class="modal fade" id="viewreview" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body">
        <table   class="" id = "data-table" style="width:100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

           
           
            <tr>
            
              {{-- <td>{{ $review->name??'' }}</td>
              <td>{{ $product->review->name??'' }}</td>
              <td>{{ $product->type->name??'' }}</td>
              <td>{{ $product->review->name??'' }}</td>
              <td>{{ $product->scentnotes->name??'' }}</td>
              <td>{{ $product->description??'' }}</td>
              <td><span class="badge badge-sm bg-gradient-{{ ($product->in_stock)?'success':'danger' }}">{{ ($product->in_stock)?'Instock':'Out of stock' }}</span></td>
              <td>{{ $product->featured?'Yes':'No' }}</td>
              <td> <span class="badge badge-sm bg-gradient-{{ ($product->status)?'success':'danger' }}">{{ ($product->status)?'Active':'Inactive' }}</span></td> --}}
        
            </tr>
           
          </tbody>
        </table>
    
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
$(document).on('change','#status',function(){

  var id = $(this).attr('re-id');
  var value = $("option:selected", this).val();

  url = "{{ route('admin.update.review') }}";
  $('#data-table tbody').empty();

  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type:"post",
    url:url,
    data:{id:id,value:value},
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
  title: 'Review has been updated!'
  }).then(function(){

   setTimeout(() => {

    location.href="{{ route('admin.show.review.list') }}";

    
   }, 1000);
    

  });


 


}
if(response.status == false){

   $.each(response.error,function(prefix,val){

    $('span.'+prefix+'_error').text('*'+val);
      

   });
   swal.close();

}



  



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
