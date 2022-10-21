@extends('frontend.layouts.master')
@section('title')
{{ $category->title?? 'No Title' }}
@endsection
@section('meta_title')
{{ $category->meta_title?? 'No MetaTitle' }}
@endsection
@section('meta_description')
{{ $category->meta_description?? 'No MetaDescription' }}
@endsection
@section('meta_keyword')
{{ $category->meta_keyword?? 'No MetaKeyword' }}
@endsection


@section('content')
 <!-- main sec -->
     <section class="from_sign py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Sign In</h2>
                    <form id="add-signin-form" action="{{ route('front.user.signin.submit') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <span class="text-danger error-text email_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            <span class="text-danger error-text password_error"></span>
                        </div>
                        {{-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label pb-3" for="exampleCheck1">I agreed the terms and conditons</label>
                        </div> --}}
                        <div class="row">
                        <button type="submit" class="btn btn-primary d-flex justify-content-center align-content-center mr-3 mt-1">Sign In </button> <span class="mt-2 mr-2">OR </span>
                          <a href="{{ route('front.show.checkout.detail') }}" class="btn btn-primary d-flex justify-content-center align-content-center mt-1">Continue as Guest </a>
                      </div>
                        <hr>
                        {{-- <div class="text-center font-weight-bold">OR </div> --}}

                        {{-- <div class="social_btns d-flex justify-content-center align-content-center py-3">
                            <button type="submit" class="btn btn-primary"> <i class="fa fa-facebook" aria-hidden="true"></i> &nbsp; Sign Up
                                With
                                Facebook </button>

                            <button type="submit" class="btn btn-primary ml-3"> <i class="fa fa-google" aria-hidden="true"></i>
                                &nbsp; Sign Up With
                                Google </button>
                        </div> --}}
                    </form>
                </div>
                {{-- <div class="col-lg-6">
                    <h2><a href="">Sign In As Guest</a></h2>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label pb-3" for="exampleCheck1">I agreed the terms and conditons</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign In </button>
                        <hr>
                        <div class="text-center font-weight-bold">OR </div>

                        {{-- <div class="social_btns d-flex justify-content-center align-content-center py-3">
                            <button type="submit" class="btn btn-primary"> <i class="fa fa-facebook" aria-hidden="true"></i> &nbsp; Sign Up With
                            Facebook </button>

                            <button type="submit" class="btn btn-primary ml-3"> <i class="fa fa-google" aria-hidden="true"></i>
                            &nbsp; Sign Up With
                            Google </button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- main sec  ends-->
@endsection
@push('script')
<script>
    $(document).on('submit','#add-signin-form',function(e){

e.preventDefault();

// form = $('#add-product-form').serialize();
var url = $(this).attr('action');
$.ajax({

  headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
  type:"post",
  url: url,
  data: new FormData(this),
  beforeSend:function(){
    Swal.fire({
            title: "Sigining In",
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
    timer: 3000,
    timerProgressBar: true,
    });

    Toast.fire({
    icon: 'success',
    title: 'Sign in Successfully!'
    }).then(function(){


      setTimeout(() => {

        location.href={{ route('front.show.cart') }};
       
        
      }, 1000);
    })





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