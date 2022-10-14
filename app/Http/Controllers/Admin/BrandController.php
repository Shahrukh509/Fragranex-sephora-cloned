<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Department;
use App\Models\ScentNote;
use App\Models\ProductVariation;
use Validator;
use Str;

class BrandController extends Controller
{
    public function showbrandList(Request $request){


        if(request()->ajax()){
            $brand = Brand::where('id',$request->id)->first();
   
            return response()->json([
   
               'name' => $brand->name,
               'description' => $brand->description,
               'status' => $brand->status
            ]);
           
           }


        $data['brands'] = Brand::all();
        return view('admin.brand.show_brand',$data);
    }



    public function addbrandShow(Request $request){
      return view('admin.brand.add_brand');
    }

    public function addbrand(Request $request){

        $validate = Validator::make($request->all(),[
    
            'name' => 'required|unique:brands'
    
          ]);
    
          if(!$validate->passes()){
            
            return response()->json([
             
                'status' => false,
                'error' => $validate->errors()->toArray()
    
            ]);

      }

        if($request->hasFile('image')){
        
        
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();

            $path = $image->move(public_path('admin/images/brand'), $filename);
            $path = url('/public/admin/images/brand/').'/'.$filename;

        }


      $brand = Brand::create([

        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
        'meta_keyword' => $request->meta_keyword,
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'image' => $path,
        'description' => $request->description,
        'status' => $request->status
      ]);

      if($brand){

        return response()->json([

            'status' => true
        ]);
    }else{

        return response()->json([

            'status' => false
        ]);
    }

    }

      public function updatebrandShow($id){

        $data['brand'] =Brand::where('id',$id)->first();
        return view('admin.brand.edit_brand',$data);
      }


      public function updatebrand(Request $request){
        $brand = Brand::where('id',$request->id)->first();

        if($brand->name !== $request->name){

            $validate = Validator::make($request->all(),[
    
                'name' => 'required|unique:brands'
        
              ]);
        
            if(!$validate->passes()){
                
                return response()->json([
                 
                    'status' => false,
                    'error' => $validate->errors()->toArray()
        
                ]);
    
          }

        }

        if($request->hasFile('image')){
        
        
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();

            $path = $image->move(public_path('admin/images/brand'), $filename);
            $path = url('/public/admin/images/brand/').'/'.$filename;

        }



        $value = $brand->update([

            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $path??$brand->image,
            'description' => $request->description,
            'status' => $request->status


        ]);

        if($value){


            return response()->json([

                'status' => true
            ]);



        }else{

            return response()->json([

                'status' => false
            ]);



        }

        


      }

      public function deletebrand($id){

        $brand = Brand::where('id',$id)->first();

        $result= $brand->delete();
        if($result){

            return back();


        }else{

            return Redirect::to("https://en.pimg.jp/056/919/243/1/56919243.jpg");
        }


        
      }
}
