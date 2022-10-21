<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ShippingCharge;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;


class OrderController extends Controller
{
    public function Signin(){
        // dd('hi');
        return view('frontend.auth.signin');
      }
  
      public function submitForm(Request $request){

        $validate = Validator::make($request->all(),[
            
          'email' => 'required',
          'password' => 'required|min:6'
  
      ]);
  
      if(!$validate->passes()){
          
          return response()->json([
          
              'status' => false,
              'error' => $validate->errors()->toArray()
  
          ]);

        }
  

        $user = User::where('email',$request->email)->first();

        if($user){

          Auth::login($user);

  

          $cart = \Cart::getContent()->count();

          if($cart){

            return redirect()->route('front.show.checkout.detail');

          


          }else{

               return redirect()->route('front.home');
          }


        }else{

          $new_user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2
          ]);
          if($new_user){

            Auth::login($new_user);
            $cart = \Cart::getContent()->count();

          if($cart){

            return redirect()->route('front.show.checkout.detail');

          


          }else{

               return redirect()->route('front.home');
          }

          

          }
        }
  
      }

    public function ShowCart(Request $request){

    	return view('frontend.cart');
    }

    public function ShowCheckOutDetail(Request $request){

      return view('frontend.checkout');
    }


    public function saveOder(Request $request){

      // dd($request);
      $data['products']= [];

      if($request->billing_type == 'shipping_address'){

        $validated = $request->validate([
          'email' => 'required|email',
          'first_name' => 'required|string',
          'last_name' => 'required|string',
          'address_1' => 'required|string',
          'house_no' => 'required|string',
          'city' => 'required',
          'phone' => 'required',
          'payment_method' => 'required'
      ]);

      }
      
      if($request->billing_type == 'different_address'){

        $validated = $request->validate([
          'd_email' => 'required|email',
          'd_first_name' => 'required|string',
          'd_last_name' => 'required|string',
          'd_address_1' => 'required|string',
          'd_house_no' => 'required|string',
          'd_city' => 'required',
          'd_phone' => 'required',
          'payment_method' => 'required'
      ]);
      
      }
      if($validated){

        if($request->billing_type == 'shipping_address'){

          $email = $request->email;
          $first_name = $request->first_name;
          $last_name = $request->last_name;
          $address_1 = $request->address_1;
          $address_2 = $request->address_2;
          $house_no = $request->house_no;
          $billing_type = $request->billing_type;
          $order_type = $request->order_type?'gift':'';
          $near_location = $request->near_location;
          $city = $request->city;
          $state_province = $request->state_province;
          $zip_code = $request->zip_code;
          $country = $request->country;
          $phone = $request->phone;
          $message = $request->message;
          $payment_method = $request->payment_method;

        }
        if($request->billing_type == 'different_address'){

          $email = $request->d_email;
          $first_name = $request->d_first_name;
          $last_name = $request->d_last_name;
          $address_1 = $request->d_address_1;
          $address_2 = $request->d_address_2;
          $house_no = $request->d_house_no;
          $billing_type = $request->billing_type;
          $order_type = $request->order_type?'gift':'';
          $near_location = $request->d_near_location;
          $city = $request->d_city;
          $state_province = $request->d_state_province;
          $zip_code = $request->d_zip_code;
          $country = $request->d_country;
          $phone = $request->d_phone;
          $message = $request->message;
          $payment_method = $request->payment_method;

        }
        try{

          $user = User::where('ip_address',request()->ip())->first();
          $shipping = ShippingCharge::where('city',$city)->first();
          $shipping_charges = $shipping->charges??300;

          // dd($shipping);
            if(!$user){

              $new_user = User::create([
                'role_id' => 2,
                'ip_address' => request()->ip(),
                'email' => $email,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'address_1' => $address_1,
                'address_2' => $address_2,
                'city' => $city,
                'state_of_province' => $state_province,
                'zipcode' => $zip_code,
                'country' => $country,
                'phone' => $phone,
                'account_type' => 'Guest'
              ]);

            }

            $order = Order::create([

              'user_id' => $new_user->id??$user->id,
              'tracking_number' => rand(),
              'email' => $email,
              'first_name' => $first_name,
              'last_name' => $last_name,
              'address_1' => $address_1, 
              'address_2' => $address_2,
              'house_no' =>  $house_no,
              'near_location' => $near_location, 
              'city' =>      $city,
              'state_province' => $state_province, 
              'zip_code' => $zip_code, 
              'country' => $country, 
              'phone' =>  $phone,
              'billing_type' => $billing_type,
              'order_type' => $order_type,
              'payment_method' => $payment_method, 
              'message' => $message,
              'total_amount' => ($request->order_type)? \Cart::getTotal() + 500 + $shipping_charges:\Cart::getTotal()+$shipping_charges
   
             ]);

             if($order){
              foreach(\Cart::getContent() as $value){
                $orderdetail = OrderDetail::create([

                  'order_id' => $order->id,
                  'product_variation_id' => $value->id,
                  'quantity' => $value->quantity,
                  'price' => $value->price 

                ]);
                
                if($orderdetail->variable_product->quantity){
                 $new_qty = $orderdetail->variable_product->quantity - $value->quantity;
                  $orderdetail->variable_product->update([
                    'quantity' => $new_qty 
                  ]);
                }

              }
             
             }
             
             
            //  \Session::set('order_id',$order->id);
             \Session::put('order_id',$order->id);
             \Session::put('shipping_charges',$shipping_charges);

             \Cart::clear();

             if($orderdetail){

              return redirect('order/successful');


             }


          

         
           

        }catch(\Exception $e){

          return $e;


        }
      }

     


    }

    public function savePassword(Request $request){

     $user = User::where('id',$request->id)->first();

     $user->password = Hash::make($request->password);

     $user->save();
     if($user){

      return response()->json([
       
        'success' => true,
        'email' =>$user->email,
        'password' => $request->password

      ]);


     }else{

      return response()->json([
       
        'success' => false

      ]);



     }



    }
   
}
