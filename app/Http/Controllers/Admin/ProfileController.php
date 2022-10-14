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
use App\Models\User;
use App\Models\ProductVariation;
use Validator;
use Str;

class ProfileController extends Controller
{
    public function showprofileList(Request $request){


        // if(request()->ajax()){
        //     $scent = ScentNote::where('id',$request->id)->first();
   
        //     return response()->json([
   
        //        'name' => $scent->name,
        //        'id' => $scent->id,
        //        'status' => $scent->status
        //     ]);
           
        //    }
        return view('admin.profile.edit_profile');
    }


      public function updateprofile(Request $request){


        $user= User::where('id',Auth()->user()->id)->first();

          

           if($user->email !== $request->email){


            $validate = Validator::make($request->all(),[
    
              'email' => 'required|unique:users'
      
            ]);
      
          if(!$validate->passes()){
              
              return response()->json([
               
                  'status' => false,
                  'error' => $validate->errors()->toArray()
      
              ]);
  
        }


           }

           

        


        
        $value = $user->update([

            'first_name' => $request->first_name??$user->first_name,
            'last_name' => $request->last_name??$user->last_name,
            'email' => $request->email??$user->email,


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
}
