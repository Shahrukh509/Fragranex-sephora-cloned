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
use Str;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showcategoryList(Request $request){


        if(request()->ajax()){
            $category = Category::where('id',$request->id)->first();
   
            return response()->json([
   
               'name' => $category->name,
               'parent_name' => $category->parent->name??'no parent',
               'featured' => $category->featured,
               'status' => $category->status
            ]);
           
           }


        $data['categories'] = Category::all();
        return view('admin.category.show_category',$data);
    }



    public function addcategoryShow(Request $request){

        $data['parent_names'] = Category::all();

        return view('admin.category.add_category',$data);
    }

    public function addcategory(Request $request){

        $validate = Validator::make($request->all(),[
    
            'name' => 'required'
    
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

            $path = $image->move(public_path('admin/images/category'), $filename);
            $path = url('/public/admin/images/category/').'/'.$filename;

        }


      $category = Category::create([

        'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $path??$category->image,
            'parent_id' => $request->parent_id??NULL,
            'featured' => $request->featured??0,
            'status' => $request->status
      ]);

      if($category){

        return response()->json([

            'status' => true
        ]);
    }else{

        return response()->json([

            'status' => false
        ]);
    }

    }

      public function updatecategoryShow($id){

        $data['category'] =Category::where('id',$id)->first();
        $data['parent_names'] = Category::all();

        // dd($data['parent_names']);
        return view('admin.category.edit_category',$data);
      }


      public function updatecategory(Request $request){
        $category = Category::where('id',$request->id)->first();

        if($category->name !== $request->name){

            $validate = Validator::make($request->all(),[
    
                'name' => 'required'
        
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

            $path = $image->move(public_path('admin/images/category'), $filename);
            $path = url('/public/admin/images/category/').'/'.$filename;

        }



        $value = $category->update([

            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $path??$category->image,
            'parent_id' => $request->parent_id??NULL,
            'featured' => $request->featured??0,
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

      public function deletecategory($id){

        $category = Category::where('id',$id)->first();

        $result= $category->delete();
        if($result){

            return back();


        }else{

            return Redirect::to("https://en.pimg.jp/056/919/243/1/56919243.jpg");
        }


        
      }
}
