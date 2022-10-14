<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Type;
use App\Models\review;
use App\Models\ScentNote;
use App\Models\ProductVariation;
use App\Models\Order;
use Validator;
use Str;

class ReviewController extends Controller
{
    public function showreviewList(Request $request){


        if(request()->ajax()){
            $review = Review::where('id',$request->id)->first();
   
            return response()->json([
   
               'name' => $review->name,
               'status' => $review->status
            ]);
           
           }


        $data['reviews'] = Review::all();
        return view('admin.reviews.show_reviews',$data);
    }



    // public function addreviewShow(Request $request){
    //   return view('admin.review.add_review');
    // }

    // public function addreview(Request $request){

    //     $validate = Validator::make($request->all(),[
    
    //         'name' => 'required|unique:reviews'
    
    //       ]);
    
    //       if(!$validate->passes()){
            
    //         return response()->json([
             
    //             'status' => false,
    //             'error' => $validate->errors()->toArray()
    
    //         ]);

    //   }

    //     if($request->hasFile('image')){
        
        
    //         $image = $request->file('image');
    //         $filename = $image->getClientOriginalName();

    //         $path = $image->move(public_path('admin/images/review'), $filename);
    //         $path = url('/public/admin/images/review/').'/'.$filename;

    //     }


    //   $review = Review::create([

    //     'meta_title' => $request->meta_title,
    //     'meta_description' => $request->meta_description,
    //     'meta_keyword' => $request->meta_keyword,
    //     'name' => $request->name,
    //     'slug' => Str::slug($request->name),
    //     'image' => $path,
    //     'status' => $request->status
    //   ]);

    //   if($review){

    //     return response()->json([

    //         'status' => true
    //     ]);
    // }else{

    //     return response()->json([

    //         'status' => false
    //     ]);
    // }

    // }

      // public function updatereviewShow($id){

      //   $data['review'] =Review::where('id',$id)->first();
      //   return view('admin.review.edit_review',$data);
      // }


      public function updatereview(Request $request){
        $review = Review::where('id',$request->id)->first();

      

        $value = $review->update([

            'status' => $request->value


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

      public function deletereview($id){

        $review = Review::where('id',$id)->first();

        $result= $review->delete();
        if($result){

            return back();


        }else{

            return Redirect::to("https://en.pimg.jp/056/919/243/1/56919243.jpg");
        }


        
      }
}
