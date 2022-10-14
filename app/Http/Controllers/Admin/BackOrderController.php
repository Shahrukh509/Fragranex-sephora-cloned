<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Department;
use App\Models\Order;
use App\Models\ScentNote;
use App\Models\ProductVariation;
use App\Models\OrderDetail;
use App\Models\User;
use Validator;
use Str;

class BackOrderController extends Controller
{
    public function showorderList(Request $request){


        if(request()->ajax()){
            $order = Order::where('id',$request->id)->first();
   
            return response()->json([
   
               'name' => $order->first_name??'',
               'tracking' => $order->tracking_number,
               'email' => $order->email,
               'address' => $order->address??$order->address_2,
               'city' => $order->city,
               'phone' => $order->phone,
               'bill' => $order->billing_type,
               'order' => $order->order_type,
               'method' => $order->payment_method,
               'total' => number_format($order->total_amount),
               'status' => ($order->status==0)?'Pending':(($order->status == 1)? 'Completed':'Cancelled') 
            ]);
           
           }


        $data['orders'] = Order::all();
        return view('admin.order.show_order',$data);
    }



    public function addorderShow(Request $request){
      return view('admin.order.add_order');
    }

    public function addorder(Request $request){

        $validate = Validator::make($request->all(),[
    
            'name' => 'required|unique:orders'
    
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

            $path = $image->move(public_path('admin/images/order'), $filename);
            $path = url('/public/admin/images/order/').'/'.$filename;

        }


      $order = Order::create([

        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
        'meta_keyword' => $request->meta_keyword,
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'image' => $path,
        'description' => $request->description,
        'status' => $request->status
      ]);

      if($order){

        return response()->json([

            'status' => true
        ]);
    }else{

        return response()->json([

            'status' => false
        ]);
    }

    }

      public function updateorderShow($id){

        $data['order'] =Order::where('id',$id)->first();
        return view('admin.order.edit_order',$data);
      }


      public function updateorder(Request $request){
        $order = Order::where('id',$request->id)->first();

            $validate = Validator::make($request->all(),[
    
                'first_name' => 'required',
                'last_name' => 'required',
                'tracking_number' => 'required',
                'email' => 'required',
                'address_1' => 'required',
                'city' => 'required',
                'phone' => 'required',
                'order_type' => 'required',
                'payment_method' => 'required',
                'total_amount' => 'required',
                'product_name' => 'required',
                'variation_size' => 'required',
                'status' => 'required',

        
              ]);
        
            if(!$validate->passes()){
                
                return response()->json([
                 
                    'status' => false,
                    'error' => $validate->errors()->toArray()
        
                ]);
    
          }

        $value = $order->update([

            'tracking_number' => $request->tracking_number,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'house_no' => $request->house_no,
            'near_location' => $request->near_location,
            'city' => $request->city,
            'state_province' => $request->state_province,
            'zip_code' => $request->zip_code,
            'country' => $request->country,
            'phone' => $request->phone,
            'payment_method' => $request->payment_method,
            'total_amount' => $request->total_amount,
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

      public function orderPrint($id=''){

        $data['order'] = Order::where('id',$id)->first();
        $data['user'] = User::where('id',$data['order']->user_id)->first();
        $data['order_detail']= OrderDetail::where('order_id',$data['order']->id)->get();

        return view('admin.order.print_order',$data);



      }

      public function deleteorder($id){

        $order = Order::where('id',$id)->first();

        $result= $order->delete();
        if($result){

            return back();


        }else{

            return Redirect::to("https://en.pimg.jp/056/919/243/1/56919243.jpg");
        }


        
      }
}
