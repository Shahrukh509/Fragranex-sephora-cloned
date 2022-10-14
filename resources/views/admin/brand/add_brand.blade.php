@extends('admin.layouts.master')

@section('content')
<div class="container">
  <form id="add-brand-form" action="{{ route('admin.add.brand') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <u class="text-color"><h4 class="text-color">Add Brand</h4></u>

    <div class="form-control">
    <label for="fname">Meta Title</label>
    <input type="text" id="mt" name="meta_title" placeholder="Meta title for SEO">
  </div>
 
  <div class="form-control">
    <label for="fname">Meta Description</label>
    <input type="text" id="md" name="meta_description" placeholder="Meta Description for SEO">
  </div>
  <div class="form-control">
    <label for="fname">Meta Keyword</label>
    <input type="text" id="fname" name="meta_keyword" placeholder="Meta Keyword for SEO">
  </div>
  <div class="form-control">
    <label for="fname">Brand Name</label>
    <input type="text" id="name" name="name" placeholder="Your brand Name">
    <span class="text-danger error-text name_error"></span>
  </div>
  <div class="form-control">
    <label for="fname">Upload Brand Image</label><br>
    <input class="image-file" type="file" id="image" name="image" accept="image/*"><br>

    <span class="text-danger error-text image_error"></span>
  </div>

  <div class="form-control">
    <label for="fname">Brand Description</label><br>
    <textarea name="description" id="description" cols="30" rows="4"></textarea>

  </div>
  <div class="form-control">
    <label for="featured">Select Status</label>
    <select id="status" name="status">
      <option disabled selected>Select Status</option>
      <option value="1">Active</option>
      <option value="0">InActive</option>
      
      
    </select>
  </div>
  
    <button class="text-white bg-gradient-primary" type="submit">Add Brand</button>
  </form>
</div>
    {{-- Footer here  --}}
@endsection

@push('script')
<script>
                            // submitting form
$(document).on('submit','#add-brand-form',function(e){

  e.preventDefault();

  // form = $('#add-brand-form').serialize();
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
              title: "Your brand is being uploaded",
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
      title: 'Brand has been uploaded!'
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
