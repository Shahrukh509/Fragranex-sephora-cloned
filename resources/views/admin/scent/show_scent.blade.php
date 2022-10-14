@extends('admin.layouts.master')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Scent&Notes Table</h6>
         
        </div>
        <div class="row">

          <div class="col-lg-10 col-md-10 col-sm-10">

          </div>
          <div class="col-lg-2 col-md-2 col-dm-2">
            <a class="add_product_tag" href="{{ route('admin.show.add.scent') }}"><span class="badge badge-sm bg-gradient-success"><i class="fas fa-plus"> Add scent</i></span></a>
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
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-secondary opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($scents as $scent)
              <tr>
                <td>

                  <p class="text-xs font-weight-bold mb-0 scent-id">{{ $scent->id??'' }}</p>

                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                    
                      <img src="{{ $scent->image??'' }}" class="avatar avatar-sm me-3 border-radius-lg product-image" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm product-name">{{ $scent->name??'' }}</h6>
                      {{-- <p class="text-xs text-secondary mb-0">{{ $scent->description??'' }}</p> --}}
                    </div>
                  </div>
                </td>
        
                
      
                <td class="align-middle text-center text-sm status">
                  <span class="badge badge-sm bg-gradient-{{ ($scent->status)?'success':'danger' }}">{{ ($scent->status)?'Active':'Inactive' }}</span>
                </td>
                <td class="align-middle">
                  <a href="{{ route('admin.show.update.scent',[$scent->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit scent">
                    <i class="fas fa-user-edit text-warning"></i> | &nbsp;
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs view-scent" data-bs-toggle="modal" data-id="{{ $scent->id }}" data-bs-target="#viewscent">
                      <i class="fas fa-eye text-info"></i> | &nbsp;
                      <a href="{{ route('admin.delete.scent',[$scent->id]) }}" onclick="return confirm('Are you sure to delete this?')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip">
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
--bs-modal-width: 700px;" class="modal fade" id="viewscent" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View scent</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label> ID </label>
        <p id="id"></p>

        <label> Name </label>
        <p id="name"></p>

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
$(document).on('click','.view-scent',function(){
 
  var id = $(this).attr('data-id');
  url = "{{ route('admin.show.scent.list') }}";

  $.ajax({
    url:url,
    data:{id:id},
    success:function(response){

      $('.modal-body #name').html(response.name);
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
