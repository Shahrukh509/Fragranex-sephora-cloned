<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Department;
use App\Models\typeNote;
use App\Models\ProductVariation;
use Validator;
use Str;

class TypeController extends Controller
{
    public function showtypeList(Request $request){


        if(request()->ajax()){
            $type = Type::where('id',$request->id)->first();
   
            return response()->json([
   
               'name' => $type->name,
               'id' => $type->id,
               'parent_id' => $type->parent_id,
               'status' => $type->status
            ]);
           
           }


        $data['types'] = Type::all();
        return view('admin.type.show_type',$data);
    }



    public function addtypeShow(Request $request){

      $data['types'] = type::where('status',1)->where('parent_id',null)->get();
      return view('admin.type.add_type',$data);
    }

    public function addtype(Request $request){

        $validate = Validator::make($request->all(),[
    
            'name' => 'required|unique:types'
    
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

            $path = $image->move(public_path('admin/images/type'), $filename);
            $path = url('/public/admin/images/type/').'/'.$filename;

        }


      $type = Type::create([

        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
        'meta_keyword' => $request->meta_keyword,
        'name' => $request->name,
        'parent_id' => $request->parent_id??null,
        'image' => $path,
        'status' => $request->status
      ]);

      if($type){

        return response()->json([

            'status' => true
        ]);
    }else{

        return response()->json([

            'status' => false
        ]);
    }

    }

      public function updatetypeShow($id){


        $data['types'] = type::where('status',1)->where('parent_id',null)->get();

        $data['type'] =Type::where('id',$id)->first();
        return view('admin.type.edit_type',$data);
      }


      public function updatetype(Request $request){
        $type = Type::where('id',$request->id)->first();

        if($type->name !== $request->name){

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

            $path = $image->move(public_path('admin/images/type'), $filename);
            $path = url('/public/admin/images/type/').'/'.$filename;

        }



        $value = $type->update([

            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'name' => $request->name,
            'parent_id' => $request->parent_id??NULL,
            'image' => $path??$type->image,
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

      public function deletetype($id){

        $type = Type::where('id',$id)->first();

        $result= $type->delete();
        if($result){

            return back();


        }else{

            return Redirect::to("https://en.pimg.jp/056/919/243/1/56919243.jpg");
        }


        
      }
}
