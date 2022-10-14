@extends('admin.layouts.master')

@section('content')
<div class="container">
  <form id="add-slider-form" action="{{ route('admin.add.slider') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $slider->id??'' }}">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <u class="text-color"><h4 class="text-color">Edit Slider</h4></u>


  <div class="form-control">
    <label for="fname">slider Position</label>
    <input type="number" id="position" name="position"><br>
    <span class="text-danger error-text position_error"></span>
  </div>

  <div class="form-control">

    <label for="fname">Upload slider Image</label><br>
    <input class="image-file" type="file" id="image" name="image" accept="image/*"><br>

    <span class="text-danger error-text image_error"></span>
  </div>

  <div class="form-control">
    <label for="featured">Select Status</label>
    <select id="status" name="status">
      <option disabled>Select Status</option>
      <option value="1" >Active</option>
      <option value="0">InActive</option>
      
      
    </select>
  </div>
  
    <button class="text-white bg-gradient-primary" type="submit">Edit slider</button>
  </form>
</div>

    {{-- Footer here  --}}
@endsection

@push('script')
<script>
                            // submitting form
$(document).on('submit','#add-slider-form',function(e){

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
              title: "Your slider is being added",
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
      title: 'slider has been addd!'
      }).then(function(){
        
        setInterval(() => {

          location.href="{{ route('admin.show.slider.list') }}";



      }, 1000)

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
