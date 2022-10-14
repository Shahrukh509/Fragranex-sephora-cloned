@extends('admin.layouts.master')

@section('content')
<div class="container">
  <form id="edit-profile-form" action="{{ route('admin.update.profile') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $scent->id??'' }}">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <u class="text-color"><h4 class="text-color">Edit Your Profile</h4></u>

    <div class="form-control">
    <label for="fname">Your First Name</label>
    <input type="text" id="mt" name="first_name"  value="{{ Auth()->user()->first_name }}">
  </div>

  <div class="form-control">
    <label for="fname">Your Last Name</label>
    <input type="text" id="mt" name="last_name"  value="{{ Auth()->user()->last_name }}">
  </div>
 
  <div class="form-control">
    <label for="fname">Your Email</label>
    <input type="email" id="mt" name="email"  value="{{ Auth()->user()->email }}">
    <span class="text-danger error-text email_error"></span>
  </div>

  {{-- <div class="form-control">
    <label for="fname">Your Password</label>
    <input type="password" id="mt" name="password"  value="{{ Auth()->user()->password }}">
  </div> --}}
 
  
    <button class="text-white bg-gradient-primary" type="submit">Edit Profile</button>
  </form>
</div>

    {{-- Footer here  --}}
@endsection

@push('script')
<script>
                            // submitting form
$(document).on('submit','#edit-profile-form',function(e){

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
              title: "Your profile is being edited",
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
      title: 'profile has been updated!'
      }).then(function(){
        
        setInterval(() => {

          location.href="{{ route('admin.dashboard') }}";



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
