@extends('admin.layouts.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Category table</h6>
         
        </div>
        <div class="row">

          <div class="col-lg-10 col-md-10 col-sm-10">

          </div>
          <div class="col-lg-2 col-md-2 col-dm-2">
            <a class="add_product_tag" href="{{ route('admin.show.add.category') }}"><span class="badge badge-sm bg-gradient-success"><i class="fas fa-plus"> Add Category</i></span></a>
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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Parent Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Featured</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-secondary opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td>

                  <p class="text-xs font-weight-bold mb-0 category-id">{{ $category->id??'' }}</p>

                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                    
                      <img src="{{ $category->image??'' }}" class="avatar avatar-sm me-3 border-radius-lg product-image" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm product-name">{{ $category->name??'' }}</h6>
                      {{-- <p class="text-xs text-secondary mb-0">{{ $category->description??'' }}</p> --}}
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0 category-name">{{ $category->parent->name??'NULL' }}</p>
                </td>
                <td >
                  <p class="text-xs font-weight-bold mb-0 category-name">{{ $category->featured??'' }}</p>
                  {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                </td>
                
      
                <td class="align-middle text-center text-sm status">
                  <span class="badge badge-sm bg-gradient-{{ ($category->status)?'success':'danger' }}">{{ ($category->status)?'Active':'Inactive' }}</span>
                </td>
                <td class="align-middle">
                  <a href="{{ route('admin.show.update.category',[$category->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit category">
                    <i class="fas fa-user-edit text-warning"></i> | &nbsp;
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs view-category" data-bs-toggle="modal" data-id="{{ $category->id }}" data-bs-target="#viewcategory">
                      <i class="fas fa-eye text-info"></i> | &nbsp;
                      <a href="{{ route('admin.delete.category',[$category->id]) }}" onclick="return confirm('Are you sure to delete this?')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip">
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

<div style="--bs-modal-width: 700px;" class="modal fade" id="viewcategory" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body">
        <table   class="" id = "data-table" style="width:100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Parent Name</th>
              <th>Featured</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

           
           
            <tr>
            
              {{-- <td>{{ $category->name??'' }}</td>
              <td>{{ $product->category->name??'' }}</td>
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
$(document).on('click','.view-category',function(){

  var id = $(this).attr('data-id');
  url = "{{ route('admin.show.category.list') }}";
  $('#data-table tbody').empty();

  $.ajax({
    url:url,
    data:{id:id},
    success:function(response){

      $('#data-table > tbody').append('<td>'+response.name+'</td>');

      $('#data-table > tbody').append('<td class="text-wrap">'+response.parent_name+'</td>');

      $('#data-table > tbody').append('<td class="text-wrap">'+response.featured+'</td>');
     
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

</script>
    
@endpush
