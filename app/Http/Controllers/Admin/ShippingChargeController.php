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
use App\Models\ShippingCharge;
use Validator;
use Str;

class ShippingChargeController extends Controller
{
    public function showshippingList(Request $request){

        

        $data['shippings'] = ShippingCharge::all();
        return view('admin.shipping.show_shipping',$data);
    }



    public function addshippingShow(Request $request){
      return view('admin.shipping.add_shipping');
    }

    public function addshipping(Request $request){


        $validate = Validator::make($request->all(),[
    
            'city' => 'required|unique:shipping_charges',
            'country' => 'required',
            'charges' => 'required'
    
          ]);
    
          if(!$validate->passes()){
            
            return response()->json([
             
                'status' => false,
                'error' => $validate->errors()->toArray()
    
            ]);

      }


      $shippingcharge = ShippingCharge::create([

        
            'country' => $request->country??'paksitan',
          
            'city' => $request->city,

            'charges' => $request->charges,
         
            'status' => $request->status??1
      ]);

      if($shippingcharge){

        return response()->json([

            'status' => true
        ]);
    }else{

        return response()->json([

            'status' => false
        ]);
    }

    }

      public function updateshippingShow($id){

        $data['shipping'] =ShippingCharge::where('id',$id)->first();
        $data['cities'] = [" Karachi","Lahore","Faisalabad","Rawalpindi","Gujranwala","Peshawar","Multan","Hyderabad","Islamabad","Quetta","Bahawalpur","Sargodha","Sialkot","Sukkur","Larkana","Rahim Yar Khan","Sheikhupura","Jhang","Dera Ghazi Khan","Gujrat","Sahiwal","Wah Cantonment","Mardan","Kasur","Okara","Mingora","Nawabshah","Chiniot","Kotri","Kāmoke","Hafizabad","Sadiqabad","Mirpur Khas","Burewala","Kohat","Khanewal","Dera Ismail Khan","Turbat","Muzaffargarh","Abbotabad","Mandi Bahauddin","Shikarpur","Jacobabad","Jhelum","Khanpur","Khairpur","Khuzdar","Pakpattan","Hub","Daska","Gojra","Dadu","Muridke","Bahawalnagar","Samundri","Tando Allahyar","Tando Adam","Jaranwala","Chishtian","Muzaffarabad","Attock","Vehari","Kot Abdul Malik","Ferozwala","Chakwal","Gujranwala Cantonment","Kamalia","Umerkot","Ahmedpur East","Kot Addu","Wazirabad","Mansehra","Layyah","Mirpur","Swabi","Chaman","Taxila","Nowshera","Khushab","Shahdadkot","Mianwali","Kabal","Lodhran","Hasilpur","Charsadda","Bhakkar","Badin","Arif Wala","Ghotki","Sambrial","Jatoi","Haroonabad","Daharki","Narowal","Tando Muhammad Khan","Kamber Ali Khan","Mirpur Mathelo","Kandhkot","Bhalwal","Gwadar"];
        return view('admin.shipping.edit_shipping',$data);
      }


      public function updateshipping(Request $request){
        $shipping = ShippingCharge::where('id',$request->id)->first();

        

          // dd($request->position);

            $validate = Validator::make($request->all(),[
    
                'city' => 'required',
                'charges' => 'required'
        
              ]);
          
              
        
            if(!$validate->passes()){
                
                return response()->json([
                 
                    'status' => false,
                    'error' => $validate->errors()->toArray()
        
                ]);
    
          }



        $value = $shipping->update([

      
            'country' => $request->country??'paksitan',
          
            'city' => $request->city,

            'charges' => $request->charges,
         
            'status' => $request->status??1


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

      public function deleteshipping($id){

        $shippingcharge = ShippingCharge::where('id',$id)->first();

        $result= $shippingcharge->delete();
        if($result){

            return back();


        }else{

            return Redirect::to("https://en.pimg.jp/056/919/243/1/56919243.jpg");
        }


        
      }
}
