@extends('admin.layouts.master')

@section('content')
<div class="container">
  <form id="add-product-form" action="{{ route('admin.add.product') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <u class="text-color"><h4 class="text-color">Add Product</h4></u>

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
    <label for="fname">Product Name</label>
    <input type="text" id="name" name="name" placeholder="Your Product Name">
    <span class="text-danger error-text name_error"></span>
  </div>
  <div class="form-control clone-image">
    <label for="fname">Upload Product Image</label><br>
    <input class="image-file" type="file" id="image" name="image[]" accept="image/*"><br>

    <span class="text-danger error-text image_error"></span>
  </div>
  <div class="put-image-div">

  </div>
  <a class="add-more-image" href="#">+ Add more image</a>

  <div class="form-control">
    <label for="country">Select Category</label>
    <select id="category" name="category">
      <option disabled selected>Select Desired Category</option>
      @foreach($categories->where('parent_id','!=','')  as $category)
      <option value={{ $category->id??'' }}>{{ $category->slug??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text category_error"></span>
  
  </div>

  <div class="form-control">
    <label for="country">Select Brand</label>
    <select id="brand" name="brand">
      <option disabled selected>Select Desired Brand</option>
      @foreach($brands as $brand)
      <option value={{ $brand->id??'' }}>{{ $brand->name??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text brand_error"></span>
  
  </div>

  <div class="form-control">
    <label for="country">Select Type</label>
    <select id="type" name="type">
      <option disabled selected>Select Desired Type</option>
      @foreach($types as $type)
      <option value={{ $type->id??'' }}>{{ $type->name??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text type_error"></span>
  
  
  </div>

  <div class="form-control">
    <label for="country">Select Departnment</label>
    <select id="department" name="department">
      <option disabled selected>Select Desired Department</option>
      @foreach($depts as $dept)
      <option value={{ $dept->id??'' }}>{{ $dept->name??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text department_error"></span>
  
  </div>

  <div class="form-control">
    <label for="country">Select Scent&Notes</label>
    <select id="scent_notes" name="scent_notes">
      <option disabled selected>Select Desired Scent&Notes</option>
      @foreach($scents as $scent)
      <option value={{ $scent->id??'' }}>{{ $scent->name??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text scent_notes_error"></span>
  
  </div>
  <div class="form-control">
    <label for="fname">Product Description</label><br>
    <textarea name="description" id="description" cols="30" rows="4"></textarea>

  </div>

  <div class="form-control">
    <label for="fname">Product Minimum Price Rs</label>
    <input type="number" id="min_price" name="min_price"><br>
    <span class="text-danger error-text min_price_error"></span>
  </div>
  <div class="form-control">
    <label for="fname">Product Maximum Price Rs</label>
    <input type="number" id="max_price" name="max_price"><br>
    <span class="text-danger error-text max_price_error"></span>
  </div>
  <div class="form-control">
    <label for="featured">Select Featured</label>
    <select id="featured" name="featured ">
      <option disabled selected>Is it Featured Product?</option>
      <option value="1">Yes</option>
      <option value="0">No</option>
      
      
    </select>
  </div>

  <div class="form-control">
    <label for="featured">Select Stock</label>
    <select id="in_stock" name="in_stock">
      <option disabled selected>Select Stock Status</option>
      <option value="1">In Stock</option>
      <option value="0">Out Of Stock</option>
      
      
    </select>
  </div>
  <div class="form-control">
    <label for="featured">Select Status</label>
    <select id="status" name="status">
      <option disabled selected>Select Status</option>
      <option value="1">Active</option>
      <option value="0">InActive</option>
      
      
    </select>
  </div>
</div>


                                {{-- V A R I A T I O N  P R O D U C T --}}



<div class="col-lg-8 col-sm-8 col-md-8 clone-to-be">

  <u class="text-color"><h4 class="text-color">Add Product Variation</h4></u>
  


  <div class="form-control">
    <label for="country">Select Type</label>
    <select  name="variation_type[]">
      <option disabled selected>Select Desired Type</option>
      @foreach($types as $type)
      <option value={{ $type->id??'' }}>{{ $type->name??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text variation_type_error"></span>
  
  
  </div>
  <div class="form-control clone-image-variation">
    <label for="fname">Upload Product Variation Image</label><br>
    <input class="image-file" type="file" id="image" name="variation_image[]" accept="image/*"><br>
    <span class="text-danger error-text variation_image_error"></span>
  </div>
  <div class="put-image-variation-div">

  </div>
  {{-- <a class="add-more-image-variation" href="#">+ Add more image</a> --}}

  <div class="form-control">
    <label for="fname">Variation Size</label>
    <input type="text"  name="variation_size[]" placeholder="example : 100 ml or 200 ml etc">
    <span class="text-danger error-text variation_size_error"></span>
  </div>

  <div class="form-control">
    <label for="fname">Variation Color</label>
    <input type="text" name="variation_color[]" placeholder="example : blue">
  </div>


  <div class="form-control">
    <label for="fname">Variation Quantity</label>
    <input type="number" name="variation_quantity[]" placeholder="Enter Quantity">
  </div>
  <div class="form-control">
    <label for="fname">Variation Price</label>
    <input type="number" name="variation_price[]" placeholder="Enter Price"><br>
    <span class="text-danger error-text variation_price_error"></span>
  </div>
  <div class="form-control">
    <label for="fname">Variation Special Price</label>
    <input type="number"  name="variation_special_price[]" placeholder="Enter Special Price">
  </div>


  <div class="form-control">
    <label for="featured">Select Stock</label>
    <select name="variation_stock[]">
      <option disabled selected>Select Stock Status</option>
      <option value="1">In Stock</option>
      <option value="0">Out Of Stock</option>
      
      
    </select>
  </div>

  <div class="form-control">
    <label for="featured">Select Status</label>
    <select name="variation_status[]">
      <option disabled selected>Select Status</option>
      <option value="1">Active</option>
      <option value="0">Inactive</option>
      
      
    </select>
  </div>

  <div class="form-control">
    <label for="fname">Any Note</label><br>
    <textarea name="variation_note[]" cols="30" rows="4"></textarea>
  </div>
 
</div>
<div class="col-lg-3 col-sm-3 col-md-3">

</div>

<div class="col-lg-1 col-sm-1 col-md-1">


  <a class="add-more" href="#">


  </a>

  
</div>

<div class="add-here">
  
</div>

<a class="add-more" href="#">+ Add more variation</a>
<a data-remove-id="" class="delete-this">- remove</a>  






    </div>

    <br>
  
    <button class="text-white bg-gradient-primary" type="submit">Add product</button>
  </form>
</div>
    {{-- Footer here  --}}
@endsection

@push('script')
<script>
  var i=0;

  $(document).ready(function(){
   
$('.delete-this').hide();
  });
  $(document).on('click','.add-more',function(){
    i++;
    var clone = $(".clone-to-be").first().clone().appendTo('.add-here').find("input").val("").end();
     $('.delete-this').show();
  });

  $(document).on('click','.add-more-image-variation',function(){
 
 $(".clone-image-variation").first().clone().appendTo('.put-image-variation-div').find("input").val("").end();

});
$(document).on('click','.add-more-image',function(){
 
 $(".clone-image").first().clone().appendTo('.put-image-div').find("input").val("").end();


});

$(document).on('click','.delete-this',function(){

  $(".add-here").find(".clone-to-be:last").remove();

});

                            // submitting form
$(document).on('submit','#add-product-form',function(e){

  e.preventDefault();

  // form = $('#add-product-form').serialize();
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
              title: "Your product is being uploaded",
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
      timer: 5000,
      timerProgressBar: true,
      });

      Toast.fire({
      icon: 'success',
      title: 'Product has been uploaded!'
      }).then(function(){

        setTimeout(() => {

          location.href="{{ route('admin.show.product.list') }}";
          
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
