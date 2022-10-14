<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Department;
use App\Models\ScentNote;
use App\Models\ProductVariation;
use Validator;
use Illuminate\Http\Request;
use Str;

class PanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      
        return view('admin.dashboard');
    }

    public function showProductList(Request $request){


        if(request()->ajax()){
         $product = Product::where('id',$request->id)->first();
        //  dd($data);

         return response()->json([

            'name' => $product->name,
            'brand' => $product->brand->name,
            'type' => $product->type->name,
            'stock' => $product->in_stock,
            'featured' =>$product->featured,
            'status' => $product->status
         ]);
        
        }


        $data['products'] = Product::where('status',1)->orderBy('id','desc')->paginate(10); 

        return view('admin.product.show_product',$data);
    }

    public function addProductShow(Request $request){

    $data['categories'] = Category::where('status',1)->get();
    $data['brands'] = Brand::where('status',1)->get();
    $data['types'] = Type::where('status',1)->get();
    $data['depts'] = Department::where('status',1)->get();
    $data['scents'] = ScentNote::where('status',1)->get();

     return view('admin.product.add_product',$data);


    }

                            // A d d   p r o d u c t 

    public function addProduct(Request $request){

     $id=[];

      $validate = Validator::make($request->all(),[

        'name' => 'required|unique:products',
        'category' => 'required',
        'brand' => 'required',
        'type' => 'required',
        'department' => 'required',
        'scent_notes' => 'required',
        'min_price' => 'required',
        'max_price' => 'required',
        'variation_type' => 'required',
        'variation_size' => 'required',
        'variation_price' => 'required',
        'image' => 'required',
        'variation_image' => 'required'

      ]);

      if(!$validate->passes()){
        
        return response()->json([
         
            'status' => false,
            'error' => $validate->errors()->toArray()

        ]);

      }
      
    else{

        $product = Product::create([

            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'name' => $request->name,
            'slug' => ($request->category==6)?Str::slug($request->name.'-cologne'):Str::slug($request->name),
            'category_id' => $request->category,
            'brand_id' => $request->brand,
            'type_id' => $request->type,
            'department_id' => $request->department,
            'scent_notes_id' => $request->scent_notes,
            'description' => $request->description,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'in_stock' => $request->in_stock,
            'featured' => $request->featured??0,
            'status' => $request->status??1
    
    
    
        ]);
        if($request->hasFile('image')){
    
            foreach($request->file('image') as $image){
                
                $filename = $image->getClientOriginalName();
    
                $path = $image->move(public_path('admin/images/product'), $filename);
                $path = url('/public/admin/images/product/').'/'.$filename;
    
                // $product->image()->path = $path;
                $product->image()->create([
                 
                    'path' => $path
    
                ]);
    
    
    
    
            }
    
           
        }
        if($request->has('variation_type')){

            // $product = Product::find($product->id);

            foreach($request->variation_type as $key=>$variation_type){

               $vary= $product->all_variable_products()->create([
                    'type_id' =>$variation_type
                ]);

                $id[$key]=$vary->id;

                // dd($x);

                if($request->hasFile('variation_image')){

                    $filename = $request->file('variation_image')[$key]->getClientOriginalName();
    
                $path =  $request->file('variation_image')[$key]->move(public_path('admin/images/product_variation'), $filename);
                $path = url('/public/admin/images/product_variation/').'/'.$filename;

                $vary->images()->create([
                    'product_id' => $product->id, 
                    'path' => $path
                ]);



                }

                

            }

        }

        if($request->has('variation_size')){

            // $product = Product::find($product->id);

            foreach($request->variation_size as $key=>$size){


                if($id[$key]){


                    $variation = ProductVariation::where('id',$id[$key])->first();

                    $variation->size=$size;
                    $variation->save();


                }

                


            }

        }
        if($request->has('variation_color')){

            // $product = Product::find($product->id);

            foreach($request->variation_color as $key=>$color){


                if($id[$key]){


                    $variation = ProductVariation::where('id',$id[$key])->first();

                    $variation->color=$color;
                    $variation->save();



                }

                

            }

        }
        if($request->has('variation_quantity')){

            // $product = Product::find($product->id);

            foreach($request->variation_quantity as $key=>$qty){


                if($id[$key]){


                    $variation = ProductVariation::where('id',$id[$key])->first();

                    $variation->quantity=$qty;
                    $variation->save();
     



                }

               

            }

        }
        if($request->has('variation_price')){

            // $product = Product::find($product->id);

            foreach($request->variation_price as $key=>$price){


                if($id[$key]){


                    $variation = ProductVariation::where('id',$id[$key])->first();

               $variation->price=$price;
               $variation->save();
     



                }

                


            }

        }

        if($request->has('variation_special_price')){

            // $product = Product::find($product->id);

            foreach($request->variation_special_price as $key=>$sale_price){



                if($id[$key]){


                    $variation = ProductVariation::where('id',$id[$key])->first();

                    $variation->sale_price=$sale_price;
                    $variation->save();




                }

                


            }

        }

        if($request->has('variation_stock')){

            // $product = Product::find($product->id);

            foreach($request->variation_stock as $key=>$stock){


                if($id[$key]){


                    $variation = ProductVariation::where('id',$id[$key])->first();

               $variation->in_stock=$stock;
               $variation->save();





                }

                

            }

        }

        if($request->has('variation_status')){

            // $product = Product::find($product->id);

            foreach($request->variation_status as $key=>$status){


                if($id[$key]){


                    $variation = ProductVariation::where('id',$id[$key])->first();

                    $variation->status=$status;
                    $variation->save();
     





                }

                

            }

        }

        if($request->has('variation_note')){

            // $product = Product::find($product->id);

            foreach($request->variation_note as $key=>$note){


                if($id[$key]){


                    $variation = ProductVariation::where('id',$id[$key])->first();

                    $variation->note=$note;
                    $variation->save();





                }

               


            }

        }

        return response()->json([
          
          'status' => true

        ]);

       
      }

    }



                            //  E n d  o f   a d d  p r o d u c t 



public function updateProductShow($id){


    $data['product'] = Product::where('id',$id)->where('status',1)->first();
    // dd($data['product']->category_id);
    $data['categories'] = Category::where('status',1)->get();
    $data['brands'] = Brand::where('status',1)->get();
    $data['types'] = Type::where('status',1)->get();
    $data['depts'] = Department::where('status',1)->get();
    $data['scents'] = ScentNote::where('status',1)->get();

    return view('admin.product.edit_product',$data);



  
}

public function updateProduct(Request $request){



    dd($request->file);


    $id=[];

      $validate = Validator::make($request->all(),[

        'name' => 'required',
        'category' => 'required',
        'brand' => 'required',
        'type' => 'required',
        'department' => 'required',
        'scent_notes' => 'required',
        'min_price' => 'required',
        'max_price' => 'required',
        'variation_type' => 'required',
        'variation_size' => 'required',
        'variation_price' => 'required',

      ]);

      if(!$validate->passes()){
        
        return response()->json([
         
            'status' => false,
            'error' => $validate->errors()->toArray()

        ]);

    }

    else{

        $product = Product::where('id',$request->id)->first();
        $count = count($product->all_variable_products);

        $product->update([

            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'name' => $request->name,
            'slug' => ($request->category==6)?Str::slug($request->name.'-cologne'):Str::slug($request->name),
            'category_id' => $request->category,
            'brand_id' => $request->brand,
            'type_id' => $request->type,
            'department_id' => $request->department,
            'scent_notes_id' => $request->scent_notes,
            'description' => $request->description,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'in_stock' => $request->in_stock,
            'featured' => $request->featured??0,
            'status' => $request->status??1
    
    
    
        ]);
        // if(count($request->variation_type) > $count){

        //     if($request->hasFile('image')){
    
        //         foreach($request->file('image') as $image){
                    
        //             $filename = $image->getClientOriginalName();
        
        //             $path = $image->move(public_path('admin/images/product'), $filename);
        //             $path = url('/public/admin/images/product/').'/'.$filename;
        
        //             // $product->image()->path = $path;
        //             $product->image()->update([
                     
        //                 'path' => $path
        
        //             ]);
        
        
        
        
        //         }
        
               
        //     }
    
        //     // dd($product);
        //     if($request->has('variation_type')){
    
        //         // $product = Product::find($product->id);
    
        //         foreach($request->variation_type as $key=>$variation_type){
    
        //             $vary = $product->all_variable_products()->create([
        //                 'type_id' =>$variation_type
        //             ]);
    
        //             $id[$key]=$$vary->id;
    
        //             // dd($x);
    
        //             if($request->hasFile('variation_image')){
    
        //                 $filename = $request->file('variation_image')[$key]->getClientOriginalName();
        
        //             $path =  $request->file('variation_image')[$key]->move(public_path('admin/images/product_variation'), $filename);
        //             $path = url('/public/admin/images/product_variation/').'/'.$filename;
    
        //             $vary->images()->create([
        //                 'product_id' => $product->id, 
        //                 'path' => $path
        //             ]);
    
    
    
        //             }
    
                    
    
        //         }
    
        //     }
    
        //     if($request->has('variation_size')){
    
        //         // $product = Product::find($product->id);
    
        //         foreach($request->variation_size as $key=>$size){
    
    
        //             if($id[$key]){
    
    
        //                 $variation = ProductVariation::where('id',$id[$key])->first();
    
        //                 $variation->size=$size;
        //                 $variation->save();
    
    
        //             }
    
                    
    
    
        //         }
    
        //     }
        //     if($request->has('variation_color')){
    
        //         // $product = Product::find($product->id);
    
        //         foreach($request->variation_color as $key=>$color){
    
    
        //             if($id[$key]){
    
    
        //                 $variation = ProductVariation::where('id',$id[$key])->first();
    
        //                 $variation->color=$color;
        //                 $variation->save();
    
    
    
        //             }
    
                    
    
        //         }
    
        //     }
        //     if($request->has('variation_quantity')){
    
        //         // $product = Product::find($product->id);
    
        //         foreach($request->variation_quantity as $key=>$qty){
    
    
        //             if($id[$key]){
    
    
        //                 $variation = ProductVariation::where('id',$id[$key])->first();
    
        //                 $variation->quantity=$qty;
        //                 $variation->save();
         
    
    
    
        //             }
    
                   
    
        //         }
    
        //     }
        //     if($request->has('variation_price')){
    
        //         // $product = Product::find($product->id);
    
        //         foreach($request->variation_price as $key=>$price){
    
    
        //             if($id[$key]){
    
    
        //                 $variation = ProductVariation::where('id',$id[$key])->first();
    
        //            $variation->price=$price;
        //            $variation->save();
         
    
    
    
        //             }
    
                    
    
    
        //         }
    
        //     }
    
        //     if($request->has('variation_special_price')){
    
        //         // $product = Product::find($product->id);
    
        //         foreach($request->variation_special_price as $key=>$sale_price){
    
    
    
        //             if($id[$key]){
    
    
        //                 $variation = ProductVariation::where('id',$id[$key])->first();
    
        //                 $variation->sale_price=$sale_price;
        //                 $variation->save();
    
    
    
    
        //             }
    
                    
    
    
        //         }
    
        //     }
    
        //     if($request->has('variation_stock')){
    
        //         // $product = Product::find($product->id);
    
        //         foreach($request->variation_stock as $key=>$stock){
    
    
        //             if($id[$key]){
    
    
        //                 $variation = ProductVariation::where('id',$id[$key])->first();
    
        //            $variation->in_stock=$stock;
        //            $variation->save();
    
    
    
    
    
        //             }
    
                    
    
        //         }
    
        //     }
    
        //     if($request->has('variation_status')){
    
        //         // $product = Product::find($product->id);
    
        //         foreach($request->variation_status as $key=>$status){
    
    
        //             if($id[$key]){
    
    
        //                 $variation = ProductVariation::where('id',$id[$key])->first();
    
        //                 $variation->status=$status;
        //                 $variation->save();
         
    
    
    
    
    
        //             }
    
                    
    
        //         }
    
        //     }
    
        //     if($request->has('variation_note')){
    
        //         // $product = Product::find($product->id);
    
        //         foreach($request->variation_note as $key=>$note){
    
    
        //             if($id[$key]){
    
    
        //                 $variation = ProductVariation::where('id',$id[$key])->first();
    
        //                 $variation->note=$note;
        //                 $variation->save();
    
    
    
    
    
        //             }
    
                   
    
    
        //         }
    
        //     }
    
        //     return response()->json([
              
        //       'status' => true
    
        //     ]);




        // }else{

            if($request->hasFile('image')){
    
                foreach($request->file('image') as $image){
                    
                    $filename = $image->getClientOriginalName();
        
                    $path = $image->move(public_path('admin/images/product'), $filename);
                    $path = url('/public/admin/images/product/').'/'.$filename;
        
                    // $product->image()->path = $path;
                    $product->image()->update([
                     
                        'path' => $path
        
                    ]);
        
        
        
        
                }
        
               
            }
    
            // dd($product);
            if($request->has('variation_type')){
    
                // $product = Product::find($product->id);
    
                foreach($request->variation_type as $key=>$variation_type){
    
                    $vary = ProductVariation::where('product_id',$product->id)->first();

                    $vary->type_id = $variation_type;
                    $id[$key]=$vary->id;
                    $vary->save();
    
                    // dd($x);
    
                    if($request->hasFile('variation_image')){

                        if(isset($request->hasFile('variation_image')[$key])){

                            $filename = $request->file('variation_image')[$key]->getClientOriginalName();
        
                    $path =  $request->file('variation_image')[$key]->move(public_path('admin/images/product_variation'), $filename);
                    $path = url('/public/admin/images/product_variation/').'/'.$filename;
    
                    $vary->images()->update([
                        'product_id' => $product->id, 
                        'path' => $path
                    ]);



                        }
    
                        
    
    
    
                    }
    
                    
    
                }
    
            }
    
            if($request->has('variation_size')){
    
                // $product = Product::find($product->id);
    
                foreach($request->variation_size as $key=>$size){
    
    
                    if($id[$key]){
    
    
                        $variation = ProductVariation::where('id',$id[$key])->first();
    
                        $variation->size=$size;
                        $variation->save();
    
    
                    }
    
                    
    
    
                }
    
            }
            if($request->has('variation_color')){
    
                // $product = Product::find($product->id);
    
                foreach($request->variation_color as $key=>$color){
    
    
                    if($id[$key]){
    
    
                        $variation = ProductVariation::where('id',$id[$key])->first();
    
                        $variation->color=$color;
                        $variation->save();
    
    
    
                    }
    
                    
    
                }
    
            }
            if($request->has('variation_quantity')){
    
                // $product = Product::find($product->id);
    
                foreach($request->variation_quantity as $key=>$qty){
    
    
                    if($id[$key]){
    
    
                        $variation = ProductVariation::where('id',$id[$key])->first();
    
                        $variation->quantity=$qty;
                        $variation->save();
         
    
    
    
                    }
    
                   
    
                }
    
            }
            if($request->has('variation_price')){
    
                // $product = Product::find($product->id);
    
                foreach($request->variation_price as $key=>$price){
    
    
                    if($id[$key]){
    
    
                        $variation = ProductVariation::where('id',$id[$key])->first();
    
                   $variation->price=$price;
                   $variation->save();
         
    
    
    
                    }
    
                    
    
    
                }
    
            }
    
            if($request->has('variation_special_price')){
    
                // $product = Product::find($product->id);
    
                foreach($request->variation_special_price as $key=>$sale_price){
    
    
    
                    if($id[$key]){
    
    
                        $variation = ProductVariation::where('id',$id[$key])->first();
    
                        $variation->sale_price=$sale_price;
                        $variation->save();
    
    
    
    
                    }
    
                    
    
    
                }
    
            }
    
            if($request->has('variation_stock')){
    
                // $product = Product::find($product->id);
    
                foreach($request->variation_stock as $key=>$stock){
    
    
                    if($id[$key]){
    
    
                        $variation = ProductVariation::where('id',$id[$key])->first();
    
                   $variation->in_stock=$stock;
                   $variation->save();
    
    
    
    
    
                    }
    
                    
    
                }
    
            }
    
            if($request->has('variation_status')){
    
                // $product = Product::find($product->id);
    
                foreach($request->variation_status as $key=>$status){
    
    
                    if($id[$key]){
    
    
                        $variation = ProductVariation::where('id',$id[$key])->first();
    
                        $variation->status=$status;
                        $variation->save();
         
    
    
    
    
    
                    }
    
                    
    
                }
    
            }
    
            if($request->has('variation_note')){
    
                // $product = Product::find($product->id);
    
                foreach($request->variation_note as $key=>$note){
    
    
                    if($id[$key]){
    
    
                        $variation = ProductVariation::where('id',$id[$key])->first();
    
                        $variation->note=$note;
                        $variation->save();
    
    
    
    
    
                    }
    
                   
    
    
                }
    
            }
    
            return response()->json([
              
              'status' => true
    
            ]);



        }
       

       
      }

    }



