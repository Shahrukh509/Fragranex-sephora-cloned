@extends('admin.layouts.master')

@section('content')
<div class="container">
  <form id="edit-slider-form" action="{{ route('admin.update.slider') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $slider->id??'' }}">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <u class="text-color"><h4 class="text-color">Edit Slider</h4></u>

  <div class="form-control">
    <label for="fname">Slider Position</label>
    <input type="text" id="position" name="position" value="{{ $slider->position??'' }}">
    <span class="text-danger error-text position_error"></span>
  </div>

  <div class="form-control">

    @if(isset($slider->image))
    <span style="padding-right:3px; padding-top: 3px; display:inline-block;">

      <img class="manImg" src="{{ $slider->image }}" width="200" height="200"></img>
      
      </span><br>
    @endif
    <label for="fname">Upload slider Image</label><br>
    <input class="image-file" type="file" id="image" name="image" accept="image/*"><br>

    <span class="text-danger error-text image_error"></span>
  </div>

  <div class="form-control">
    <label for="featured">Select Status</label>
    <select id="status" name="status">
      <option disabled>Select Status</option>
      <option value="1" {{ ($slider->status)? 'selected':'' }}>Active</option>
      <option value="0" {{ (!$slider->status)? 'selected':'' }}>InActive</option>
      
      
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
$(document).on('submit','#edit-slider-form',function(e){

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
              title: "Your slider is being edited",
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
      title: 'slider has been updated!'
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
