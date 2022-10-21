@extends('admin.layouts.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Products table</h6>
         
        </div>
        <div class="row">

          <div class="col-lg-10 col-md-10 col-sm-10">

          </div>
          <div class="col-lg-2 col-md-2 col-dm-2">
            <a class="add_product_tag" href="{{ route('admin.show.add.product') }}"><span class="badge badge-sm bg-gradient-success"><i class="fas fa-plus"> Add products</i></span></a>
          </div>


        </div>
       
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 table table-striped table-bordered table-hover" id="table">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Brand</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Variation</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Featured</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-secondary opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>

                <td>
                  <p class="text-xs font-weight-bold mb-0 brand-id">{{ $product->id??'' }}</p>
                  {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                </td>
                <td cl
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                    
                      <img src="{{ asset($product->image->path??'' )}}" class="avatar avatar-sm me-3 border-radius-lg product-image" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm product-name">{{ $product->name??'' }}</h6>
                      <p class="text-xs text-secondary mb-0">{{ $product->type->name??'' }}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0 brand-name">{{ $product->brand->name??'' }}</p>
                  {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                </td>
                <td class="align-middle text-center text-sm variation-count">
                  {{ $product->all_variable_products->count()??'' }}
                </td>
                <td class="align-middle text-center featured">
                 {{ ($product->featured)?'Yes':'No' }}
                </td>
                <td class="align-middle text-center text-sm status">
                  <span class="badge badge-sm bg-gradient-{{ ($product->status)?'success':'danger' }}">{{ ($product->status)?'Active':'Inactive' }}</span>
                </td>
                <td class="align-middle">
                  <a href="{{ route('admin.show.update.product',[$product->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    <i class="fas fa-user-edit"></i> | &nbsp;
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs view-product" data-bs-toggle="modal" data-id="{{ $product->id }}" data-bs-target="#viewproduct">
                      <i class="fas fa-eye"></i> | &nbsp;
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        <i class="fas fa-trash-alt"></i>
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
--bs-modal-width: 700px;" class="modal fade" id="viewproduct" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table  id = "data-table" style="width:100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Brand</th>
              <th>Type</th>
              <th>Stock</th>
              <th>Featured</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

           
           
            <tr>
            
              {{-- <td>{{ $product->name??'' }}</td>
              <td>{{ $product->brand->name??'' }}</td>
              <td>{{ $product->type->name??'' }}</td>
              <td>{{ $product->department->name??'' }}</td>
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
$(document).on('click','.view-product',function(){
 
  var id = $(this).attr('data-id');
  url = "{{ route('admin.show.product.list') }}";
  $('#data-table tbody').empty();

  $.ajax({
    url:url,
    data:{id:id},
    success:function(response){

      $('#data-table > tbody').append('<td>'+response.name+'</td>');
      $('#data-table > tbody').append('<td>'+response.brand+'</td>');
      $('#data-table > tbody').append('<td>'+response.type+'</td>');
      $('#data-table > tbody').append('<td>'+response.stock+'</td>');
      $('#data-table > tbody').append('<td>'+response.featured+'</td>');
      $('#data-table > tbody').append('<td>'+response.status+'</td>');
      



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
// $(function(){
// $("#table").dataTable();
// });
</script>
    
@endpush
