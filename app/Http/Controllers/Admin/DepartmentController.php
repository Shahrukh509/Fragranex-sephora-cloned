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

class DepartmentController extends Controller
{
    public function showdepartmentList(Request $request){


        if(request()->ajax()){
            $department = Department::where('id',$request->id)->first();
   
            return response()->json([
   
               'name' => $department->name,
               'status' => $department->status
            ]);
           
           }


        $data['departments'] = Department::all();
        return view('admin.department.show_department',$data);
    }



    public function adddepartmentShow(Request $request){
      return view('admin.department.add_department');
    }

    public function adddepartment(Request $request){

        $validate = Validator::make($request->all(),[
    
            'name' => 'required|unique:departments'
    
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

            $path = $image->move(public_path('admin/images/department'), $filename);
            $path = '/public/admin/images/department/'.$filename;

        }


      $department = Department::create([

        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
        'meta_keyword' => $request->meta_keyword,
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'image' => $path,
        'status' => $request->status
      ]);

      if($department){

        return response()->json([

            'status' => true
        ]);
    }else{

        return response()->json([

            'status' => false
        ]);
    }

    }

      public function updatedepartmentShow($id){

        $data['department'] =Department::where('id',$id)->first();
        return view('admin.department.edit_department',$data);
      }


      public function updatedepartment(Request $request){
        $department = Department::where('id',$request->id)->first();

        if($department->name !== $request->name){

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

            $path = $image->move(public_path('admin/images/department'), $filename);
            $path = '/public/admin/images/department/'.$filename;

        }



        $value = $department->update([

            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $path??$department->image,
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

      public function deletedepartment($id){

        $department = Department::where('id',$id)->first();

        $result= $department->delete();
        if($result){

            return back();


        }else{

            return Redirect::to("https://en.pimg.jp/056/919/243/1/56919243.jpg");
        }


        
      }
}
