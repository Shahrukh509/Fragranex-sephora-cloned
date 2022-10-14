@extends('admin.layouts.master')

@section('content')
<div class="container">
  <form id="edit-type-form" action="{{ route('admin.update.type') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $type->id??'' }}">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <u class="text-color"><h4 class="text-color">Edit Type</h4></u>

    <div class="form-control">
    <label for="fname">Meta Title</label>
    <input type="text" id="mt" name="meta_title" value="{{ $type->meta_title??'' }}">
  </div>
 
  <div class="form-control">
    <label for="fname">Meta Description</label>
    <input type="text" id="md" name="meta_description" value="{{ $type->meta_description??'' }}">
  </div>
  <div class="form-control">
    <label for="fname">Meta Keyword</label>
    <input type="text" id="fname" name="meta_keyword" value="{{ $type->meta_keyword??'' }}">
  </div>
  <div class="form-control">
    <label for="fname">type Name</label>
    <input type="text" id="name" name="name" value="{{ $type->name??'' }}">
    <span class="text-danger error-text name_error"></span>
  </div>
{{-- {{ dd($type->parent) }}  --}}
  <div class="form-control">
    <label for="featured">Select Parent</label>
    <select id="status" name="parent_id">
      <option disabled>Select Parent</option>
      <option value="">No Parent</option>
      @foreach($types as $typ)
      <option value="{{ $typ->id }}" @if(isset($type->parent->id)){{ ($type->parent->id == $typ->id)? 'selected':'' }}@endif>{{ $typ->name??'' }}</option>
    @endforeach
      
      
    </select>
  </div>

  <div class="form-control">

    @if(isset($type->image))
    <span style="padding-right:3px; padding-top: 3px; display:inline-block;">

      <img class="manImg" src="{{ $type->image }}" width="200" height="200"></img>
      
      </span><br>
    @endif
    <label for="fname">Upload type Image</label><br>
    <input class="image-file" type="file" id="image" name="image" accept="image/*"><br>

    <span class="text-danger error-text image_error"></span>
  </div>

  <div class="form-control">
    <label for="featured">Select Status</label>
    <select id="status" name="status">
      <option disabled>Select Status</option>
      <option value="1" {{ ($type->status)? 'selected':'' }}>Active</option>
      <option value="0" {{ (!$type->status)? 'selected':'' }}>InActive</option>
      
      
    </select>
  </div>
  
    <button class="text-white bg-gradient-primary" type="submit">Edit type</button>
  </form>
</div>

    {{-- Footer here  --}}
@endsection

@push('script')
<script>
                            // submitting form
$(document).on('submit','#edit-type-form',function(e){

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
              title: "Your type is being edited",
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
      title: 'type has been updated!'
      }).then(function(){


        setTimeout(() => {

          location.href="{{ route('admin.show.type.list') }}";
          
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
