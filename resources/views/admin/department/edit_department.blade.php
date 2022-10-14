@extends('admin.layouts.master')

@section('content')
<div class="container">
  <form id="edit-department-form" action="{{ route('admin.update.department') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $department->id??'' }}">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <u class="text-color"><h4 class="text-color">Edit department</h4></u>

    <div class="form-control">
    <label for="fname">Meta Title</label>
    <input type="text" id="mt" name="meta_title" value="{{ $department->meta_title??'' }}">
  </div>
 
  <div class="form-control">
    <label for="fname">Meta Description</label>
    <input type="text" id="md" name="meta_description" value="{{ $department->meta_description??'' }}">
  </div>
  <div class="form-control">
    <label for="fname">Meta Keyword</label>
    <input type="text" id="fname" name="meta_keyword" value="{{ $department->meta_keyword??'' }}">
  </div>
  <div class="form-control">
    <label for="fname">department Name</label>
    <input type="text" id="name" name="name" value="{{ $department->name??'' }}">
    <span class="text-danger error-text name_error"></span>
  </div>

  <div class="form-control">

    @if(isset($department->image))
    <span style="padding-right:3px; padding-top: 3px; display:inline-block;">

      <img class="manImg" src="{{ $department->image }}" width="200" height="200"></img>
      
      </span><br>
    @endif
    <label for="fname">Upload department Image</label><br>
    <input class="image-file" type="file" id="image" name="image" accept="image/*"><br>

    <span class="text-danger error-text image_error"></span>
  </div>

  <div class="form-control">
    <label for="featured">Select Status</label>
    <select id="status" name="status">
      <option disabled>Select Status</option>
      <option value="1" {{ ($department->status)? 'selected':'' }}>Active</option>
      <option value="0" {{ (!$department->status)? 'selected':'' }}>InActive</option>
      
      
    </select>
  </div>
  
    <button class="text-white bg-gradient-primary" type="submit">Edit department</button>
  </form>
</div>
{{-- Footer here  --}} 
@endsection

@push('script')
<script>
                            // submitting form
$(document).on('submit','#edit-department-form',function(e){

  e.preventDefault();

  // form = $('#edit-department-form').serialize();
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
              title: "Your department is being updated",
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
      title: 'department has been updated!'
      }).then(function(){

       setTimeout(() => {

        location.href="{{ route('admin.show.department.list') }}";

        
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

  });

});
</script>
@endpush
