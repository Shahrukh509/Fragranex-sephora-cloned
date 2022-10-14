@extends('admin.layouts.master')

@section('content')
<div class="container">
  <form id="edit-product-form" action="{{ route('admin.update.product') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <u class="text-color"><h4 class="text-color">Edit Product</h4></u>

    <div class="form-control">
    <label for="fname">Meta Title</label>
    <input type="text" id="mt" name="meta_title" placeholder="Meta title for SEO" value="{{ $product->meta_title??'' }}">
  </div>
 
  <div class="form-control">
    <label for="fname">Meta Description</label>
    <input type="text" id="md" name="meta_description" value="{{ $product->meta_description??'' }}" >
  </div>
  <div class="form-control">
    <label for="fname">Meta Keyword</label>
    <input type="text" id="fname" name="meta_keyword" value="{{ $product->meta_keyword??'' }}">
  </div>
  <div class="form-control">
    <label for="fname">Product Name</label>
    <input type="text" id="name" name="name" value="{{ $product->name??'' }}">
    <span class="text-danger error-text name_error"></span>
  </div>
  <div class="form-control">
    <label for="fname">Upload Product Image</label><br>
    @if(isset($product->image))
     @foreach($product->images->where('product_variation_id','') as $prod_image)
    <span class="images" style="padding-right:3px; padding-top: 3px; display:inline-block;">

      <img class="manImg" src="{{ $prod_image->path }}" width="200" height="200"></img>
      
      </span><br>
    <div class="clone-image">
    <input class="image-file" type="file" id="image" name="image[]" accept="image/*" value="{{ $prod_image->path??'' }}">
  </div>
  <br>
    @endforeach
    @endif

    <span class="text-danger error-text image_error"></span>
  </div>
  <div class="put-image-div">

  </div>
  <a class="add-more-image" href="#">+ Add more image</a>

  <div class="form-control">
    <label for="country">Select Category</label>
    <select id="category" name="category">
      <option disabled>Select Desired Category</option>
      @foreach($categories  as $category)
      <option value="{{ $category->id??'' }}" {{ ($category->id == $product->category_id)? 'selected':'' }}>{{ $category->slug??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text category_error"></span>
  
  </div>

  <div class="form-control">
    <label for="country">Select Brand</label>
    <select id="brand" name="brand">
      <option disabled>Select Desired Brand</option>
      @foreach($brands as $brand)
      <option value="{{ $brand->id??'' }}" {{ ($brand->id == $product->brand_id )? 'selected':'' }}>{{ $brand->name??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text brand_error"></span>
  
  </div>

  <div class="form-control">
    <label for="country">Select Type</label>
    <select id="type" name="type">
      <option disabled >Select Desired Type</option>
      @foreach($types as $type)
      <option value="{{ $type->id??'' }}" {{ ($type->id == $product->type_id )? 'selected':'' }}>{{ $type->name??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text type_error"></span>
  
  
  </div>

  <div class="form-control">
    <label for="country">Select Departnment</label>
    <select id="department" name="department">
      <option disabled >Select Desired Department</option>
      @foreach($depts as $dept)
      <option value="{{ $dept->id??'' }}" {{ ($dept->id == $product->department_id )? 'selected':'' }}>{{ $dept->name??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text department_error"></span>
  
  </div>

  <div class="form-control">
    <label for="">Select Scent&Notes</label>
    <select id="scent_notes" name="scent_notes">
      <option disabled >Select Desired Scent&Notes</option>
      @foreach($scents as $scent)
      <option value="{{ $scent->id??'' }}" {{ ($scent->id == $product->scent_notes_id)? 'selected':'' }}>{{ $scent->name??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text scent_notes_error"></span>
  
  </div>
  <div class="form-control">
    <label for="fname">Product Description</label><br>
    <textarea name="description" id="description" cols="30" rows="4">{{ $product->description??'' }}</textarea>

  </div>

  <div class="form-control">
    <label for="fname">Product Minimum Price Rs</label>
    <input type="number" id="min_price" name="min_price" value="{{ $product->min_price??'' }}"><br>
    <span class="text-danger error-text min_price_error"></span>
  </div>
  <div class="form-control">
    <label for="fname">Product Maximum Price Rs</label>
    <input type="number" id="max_price" name="max_price" value="{{ $product->max_price??'' }}"><br>
    <span class="text-danger error-text max_price_error"></span>
  </div>
  <div class="form-control">
    <label for="featured">Select Featured</label>
    <select id="featured" name="featured ">
      <option disabled >Is it Featured Product?</option>
      <option value="1"{{ ($product->featured)? 'selected':'' }}>Yes</option>
      <option value="0"{{ (!$product->featured)? 'selected':'' }}>No</option>
      
      
    </select>
  </div>

  <div class="form-control">
    <label for="featured">Select Stock</label>
    <select id="in_stock" name="in_stock">
      <option disabled selected>Select Stock Status</option>
      <option value="1"{{ ($product->in_stock)? 'selected':'' }}>In Stock</option>
      <option value="0"{{ (!$product->in_stock)? 'selected':'' }}>Out Of Stock</option>
      
      
    </select>
  </div>
  <div class="form-control">
    <label for="featured">Select Status</label>
    <select id="status" name="status">
      <option disabled selected>Select Status</option>
      <option value="1"{{ ($product->status)? 'selected':'' }}>Active</option>
      <option value="0"{{ (!$product->status)? 'selected':'' }}>Inactive</option>
      
      
    </select>
  </div>
</div>


                                {{-- V A R I A T I O N  P R O D U C T --}}

 @foreach($product->all_variable_products as $key=>$vary)

<div class="col-lg-8 col-sm-8 col-md-8 clone-to-be">

<input class="data-status" type="hidden" name="data_status" value="old">

<a id="delete-this"class="delete-variation" vary-id="{{ $vary->id }}"  href="{{ route('admin.delete.product') }}"><i class="fa fa-window-close" aria-hidden="true"></i></a>
  
  <u class="text-color"><h4 class="text-color"><span class="vary_num">{{ $key+1 }}.</span>Edit Product Variation</h4></u>
  <div class="form-control">
    <label for="country">Select Type</label>
    <select  name="variation_type[]">
      <option disabled>Select Desired Type</option>
      @foreach($types as $type)
      <option value="{{ $type->id??'' }}" {{ ($type->id == $vary->type_id)? 'selected':'' }}>{{ $type->name??'' }}</option>
      @endforeach
      
    </select>

    <span class="text-danger error-text variation_type_error"></span>
  
  
  </div>
  <div class="form-control">
    <label for="fname">Upload Product Variation Image</label><br>

    <span style="padding-right:3px; padding-top: 3px; display:inline-block;">

      <img class="manImg" src="{{ $vary->image->path??'' }}" width="200" height="200"></img>
      
      </span><br>

    <div class="clone-image-variation">
      
      <input class="image-file" type="file" id="image" name="variation_image[]" accept="image/*"><br>

    </div>
  
    <span class="text-danger error-text variation_image_error"></span>
  </div>
  <div class="put-image-variation-div">

  </div>
  {{-- <a class="add-more-image-variation" href="#">+ Add more image</a> --}}

  <div class="form-control">
    <label for="fname">Variation Size</label>
    <input type="text"  name="variation_size[]" value="{{ $vary->size??'' }}">
    <span class="text-danger error-text variation_size_error"></span>
  </div>

  <div class="form-control">
    <label for="fname">Variation Color</label>
    <input type="text" name="variation_color[]" value="{{ $vary->color??'' }}">
  </div>


  <div class="form-control">
    <label for="fname">Variation Quantity</label>
    <input type="number" name="variation_quantity[]" value="{{ $vary->quantity??'' }}">
  </div>
  <div class="form-control">
    <label for="fname">Variation Price</label>
    <input type="number" name="variation_price[]" value="{{ $vary->price??'' }}"><br>
    <span class="text-danger error-text variation_price_error"></span>
  </div>
  <div class="form-control">
    <label for="fname">Variation Special Price</label>
    <input type="number"  name="variation_special_price[]" value="{{ $vary->special_price??'' }}">
  </div>


  <div class="form-control">
    <label for="featured">Select Stock</label>
    <select name="variation_stock[]">
      <option disabled selected>Select Stock Status</option>
      <option value="1"{{ ($vary->in_stock)? 'selected':'' }}>In Stock</option>
      <option value="0"{{ (!$vary->in_stock)? 'selected':'' }}>Out Of Stock</option>
      
      
    </select>
  </div>

  <div class="form-control">
    <label for="featured">Select Status</label>
    <select name="variation_status[]">
      <option disabled selected>Select Status</option>
      <option value="1"{{ ($vary->status)? 'selected':'' }}>Active</option>
      <option value="0"{{ (!$vary->status)? 'selected':'' }}>Inactive</option>
      
      
    </select>
  </div>

  <div class="form-control">
    <label for="fname">Any Note</label><br>
    <textarea name="variation_note[]" cols="30" rows="4">{{ $vary->note??'' }}</textarea>
  </div>
 
</div>


@endforeach

<div class="add-here">
    
</div>

<a class="add-more" href="#">+ Add more variation</a>
<a id="delete-this" href="#">- Remove more variation</a>

    </div>

    <br>
  
    <button class="text-white bg-gradient-primary" type="submit">Edit product</button>
  </form>
</div>
    {{-- Footer here  --}}
@endsection

@push('script')
<script>
  $(document).on('click','.add-more',function(){
 
    var clone =  $(".clone-to-be").first().clone().appendTo('.add-here').find("input").val("").end();
    $('.vary_num').text('New ');

    clone.find("input[name='data_status']").val("new");
    // $(this).find('[name="variation_type[]"] option:selected').removeAttr('selected');

  });

  $(document).on('click','.add-more-image-variation',function(){
 
    $(".clone-image-variation").first().clone().appendTo('.put-image-variation-div').find("input").val("").end();

});
$(document).on('click','.add-more-image',function(){
 
 var clone = $(".clone-image").first().clone().appendTo('.put-image-div').find("input").val("").end();
//  clone.find('select[name="variation_type[]"]').removeAttr('selected').end().html();
});
$(document).on('click','#delete-this',function(){

$(".add-here").find(".clone-to-be:last").remove();

});

                            // submitting form
$(document).on('submit','#edit-product-form',function(e){

  e.preventDefault();

  var url = $(this).attr('action');
  // var product_id = ;
  $.ajax({

    headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    type:"post",
    contentType: false,
    processData: false,
    url: url,
    data: new FormData(this),
    beforeSend:function(){
      Swal.fire({
              title: "Your product is being edited",
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
      title: 'Product has been updated!'
      }).then(function(){

        setTimeout(() => {

          location.href="{{ route('admin.show.product.list') }}";
          
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

$(document).on('click','.delete-variation',function(e){

e.preventDefault();
var x=confirm( "Are you sure you want to delete?!");
var url = $(this).attr('href');
var id = $(this).attr('vary-id');
if(x){

    $.ajax({

      url: url,
      data: {id:id },
      beforeSend:function(){
        Swal.fire({
                title: "Your variation product is being deleted",
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
      title: 'Product has been deleted!'
      });

      location.reload();
  }
      if(response.status == false){

        
        const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      });

      Toast.fire({
      icon: 'error',
      title: 'Unable to delete variation!'
      });

    }


    }

  });

}
});

</script>
@endpush
