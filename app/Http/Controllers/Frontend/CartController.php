<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariation;
use Cart;
use Session;

class CartController extends Controller
{
    
	 public function cart()
    {
        return view('cart');
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart(Request $request,$id='')
    {

    	// dd($request->id);

    	// \Cart::clear();

    	// dd(\Cart::getTotalQuantity());

        
        $product = ProductVariation::findOrFail($request->id);

        $cart = \Cart::add([
            'id' => $request->id,
            'name' => $product->product->name,
            'price' => $product->price,
            'quantity' => $request->qty,
            'attributes' => array(
            "size" => $product->size,
            'image' => $product->image->path??'',
            'gender' => $product->product->category->name,
            'instock' => $product->in_stock

        )
            ]);

        if($cart){

        	 return response()->json([

        	'success' => true,
        	'itemsInCart' => \Cart::getTotalQuantity(),
        ]);


        }else{

          return response()->json([

        	'success' => false
        ]);

        }

        
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        $cart = \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->qty
                ],
            ]
        );


        // dd(\Cart::get($request->id)->price);

        $all_total = \Cart::getTotal();
        $total_items = \Cart::getTotalQuantity();
        $partial_total = \Cart::get($request->id)->price * \Cart::get($request->id)->quantity;

        if($cart){
           return response()->json([
             'success' => true,
             'all_total' => $all_total,
             'subtotal' => \Cart::getSubTotal(),
             'total_items' => $total_items,
             'partial_total' =>$partial_total,
             'id' => $request->id
           ]);
        }
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {

        $deleteItem = \Cart::remove($request->id);

        return redirect('order/cart');

        // if(Cart::isEmpty()){

        //     $view = view('frontend.ajax.remove-cart');

        //     return response()->json([
        //         'success' =>true,
        //         'view' =>$view

        //     ]);


        // }
        // if($deleteItem){

        //     return response()->json([
        //         'success' =>true,
        //         'item' =>true

        //     ]);



        // }
        
    }
}
