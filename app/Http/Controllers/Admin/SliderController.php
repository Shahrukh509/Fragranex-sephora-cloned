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
use App\Models\Slider;
use Validator;
use Str;

class SliderController extends Controller
{
    public function showsliderList(Request $request){


        if(request()->ajax()){
            $slider = Slider::where('id',$request->id)->first();
   
            return response()->json([
   
               'position' => $slider->position,
               'id' => $slider->id,
               'status' => $slider->status
            ]);
           
           }


        $data['sliders'] = Slider::all();
        return view('admin.slider.show_slider',$data);
    }



    public function addsliderShow(Request $request){
      return view('admin.slider.add_slider');
    }

    public function addslider(Request $request){


        $validate = Validator::make($request->all(),[
    
            'image' => 'required',
            'position' => 'unique:sliders'
    
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

            $path = $image->move(public_path('admin/images/slider'), $filename);
            $path = '/public/admin/images/slider/'.$filename;

        }


      $slider = Slider::create([

        
        'position' => $request->position,
      
        'image' => $path,
   
        'status' => $request->status
      ]);

      if($slider){

        return response()->json([

            'status' => true
        ]);
    }else{

        return response()->json([

            'status' => false
        ]);
    }

    }

      public function updatesliderShow($id){

        $data['slider'] =Slider::where('id',$id)->first();
        return view('admin.slider.edit_slider',$data);
      }


      public function updateslider(Request $request){
        $slider = Slider::where('id',$request->id)->first();

        if($slider->position != $request->position){

          // dd($request->position);

            $validate = Validator::make($request->all(),[
    
                'position' => 'unique:sliders'
        
              ]);
            }

              if(empty($slider->image)){
                $validate = Validator::make($request->all(),[

                  'image' => 'required'

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

            $path = $image->move(public_path('admin/images/slider'), $filename);
            $path = '/public/admin/images/slider/'.$filename;

        }



        $value = $slider->update([

      
            'position' => $request->position,
          
            'image' => $path??$slider->image,
         
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

      public function deleteslider($id){

        $slider = Slider::where('id',$id)->first();

        $result= $slider->delete();
        if($result){

            return back();


        }else{

            return Redirect::to("https://en.pimg.jp/056/919/243/1/56919243.jpg");
        }


        
      }
}
