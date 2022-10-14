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

class ScentController extends Controller
{
    public function showscentList(Request $request){


        if(request()->ajax()){
            $scent = ScentNote::where('id',$request->id)->first();
   
            return response()->json([
   
               'name' => $scent->name,
               'id' => $scent->id,
               'status' => $scent->status
            ]);
           
           }


        $data['scents'] = ScentNote::all();
        return view('admin.scent.show_scent',$data);
    }



    public function addscentShow(Request $request){
      return view('admin.scent.add_scent');
    }

    public function addscent(Request $request){


        $validate = Validator::make($request->all(),[
    
            'name' => 'required|unique:scent_notes'
    
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

            $path = $image->move(public_path('admin/images/scent'), $filename);
            $path = url('/public/admin/images/scent/').'/'.$filename;

        }


      $scent = ScentNote::create([

        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
        'meta_keyword' => $request->meta_keyword,
        'name' => $request->name,
      
        'image' => $path,
   
        'status' => $request->status
      ]);

      if($scent){

        return response()->json([

            'status' => true
        ]);
    }else{

        return response()->json([

            'status' => false
        ]);
    }

    }

      public function updatescentShow($id){

        $data['scent'] =ScentNote::where('id',$id)->first();
        return view('admin.scent.edit_scent',$data);
      }


      public function updatescent(Request $request){
        $scent = ScentNote::where('id',$request->id)->first();

        if($scent->name !== $request->name){

            $validate = Validator::make($request->all(),[
    
                'name' => 'required|unique:scents'
        
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

            $path = $image->move(public_path('admin/images/scent'), $filename);
            $path = url('/public/admin/images/scent/').'/'.$filename;

        }



        $value = $scent->update([

            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'name' => $request->name,
          
            'image' => $path??$scent->image,
         
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

      public function deletescent($id){

        $scent = ScentNote::where('id',$id)->first();

        $result= $scent->delete();
        if($result){

            return back();


        }else{

            return Redirect::to("https://en.pimg.jp/056/919/243/1/56919243.jpg");
        }


        
      }
}
