@extends('admin.layouts.master')

@section('content')
<div class="container">
  <form id="edit-brand-form" action="{{ route('admin.update.brand') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $brand->id??'' }}">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <u class="text-color"><h4 class="text-color">Edit Brand</h4></u>

    <div class="form-control">
    <label for="fname">Meta Title</label>
    <input type="text" id="mt" name="meta_title" value="{{ $brand->meta_title??'' }}">
  </div>
 
  <div class="form-control">
    <label for="fname">Meta Description</label>
    <input type="text" id="md" name="meta_description" value="{{ $brand->meta_description??'' }}">
  </div>
  <div class="form-control">
    <label for="fname">Meta Keyword</label>
    <input type="text" id="fname" name="meta_keyword" value="{{ $brand->meta_keyword??'' }}">
  </div>
  <div class="form-control">
    <label for="fname">Brand Name</label>
    <input type="text" id="name" name="name" value="{{ $brand->name??'' }}">
    <span class="text-danger error-text name_error"></span>
  </div>

  <div class="form-control">

    @if(isset($brand->image))
    <span style="padding-right:3px; padding-top: 3px; display:inline-block;">

      <img class="manImg" src="{{ asset($brand->image) }}" width="200" height="200"></img>
      
      </span><br>
    @endif
    <label for="fname">Upload Brand Image</label><br>
    <input class="image-file" type="file" id="image" name="image" accept="image/*"><br>

    <span class="text-danger error-text image_error"></span>
  </div>

  <div class="form-control">
    <label for="fname">Brand Description</label><br>
    <textarea name="description" id="description" cols="30" rows="4">{{ $brand->description??'' }}</textarea>

  </div>
  <div class="form-control">
    <label for="featured">Select Status</label>
    <select id="status" name="status">
      <option disabled>Select Status</option>
      <option value="1" {{ ($brand->status)? 'selected':'' }}>Active</option>
      <option value="0" {{ (!$brand->status)? 'selected':'' }}>InActive</option>
      
      
    </select>
  </div>
  
    <button class="text-white bg-gradient-primary" type="submit">Edit Brand</button>
  </form>
</div>

    {{-- Footer here  --}}
@endsection

@push('script')
<script>
                            // submitting form
$(document).on('submit','#edit-brand-form',function(e){

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
              title: "Your brand is being edited",
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
      timer: 1000,
      timerProgressBar: true,
      });

      Toast.fire({
      icon: 'success',
      title: 'brand has been updated!'
      }).then(function(){

          setTimeout(() => {

            location.href="{{ route('admin.show.brand.list') }}";


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
