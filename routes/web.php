<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\ScentController;
use App\Http\Controllers\Admin\BackOrderController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

       // REFRESHING APPLICATION

Route::get('clear', function(){

Artisan::call("optimize:clear");

return 'application has been optimized';
});

     //END OF REFRESHING APPLICATION

     // ALL FRONTEND ROUTES

Route::group(['as'=>'front.'], function(){

    Route::get('/', [HomeController::class,'index'])->name('home');

    Route::get('shopping/{name?}/{category?}', [HomeController::class,'ShoppingType'])->name('overview');

    Route::get('products/{parent?}/{child?}/{cat_id?}',[HomeController::class,'SeeProduct'])->name('product.show');

   Route::get('search/{search?}',[HomeController::class,'Filtered'])->name('search');

   Route::get('product/ALL',[HomeController::class,'AllBrands'])->name('all.brands');      
  

   Route::get('product-alphabet/{Alphabet?}/{category?}',[HomeController::class,'BrandByAlphabet'])->name('brand.alphabet');
   Route::get('select-size',[HomeController::class,'selectSize'])->name('select.size');
                      
                         // CART SYSTEM

   Route::get('cart', [CartController::class, 'cart'])->name('cart');
   Route::get('add-to-cart/{id?}', [CartController::class, 'addToCart'])->name('add.to.cart');
   Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
   Route::get('remove-from-cart/{id?}', [CartController::class, 'remove'])->name('remove.from.cart');

                                 // END OF CART SYSTEM 


                                // ORDERS 
    Route::get('order/signin',[OrderController::class,'Signin'])->name('user.signin');
    Route::post('order/submitForm',[OrderController::class,'submitForm'])->name('user.signin.submit');
   Route::get('order/cart',[OrderController::class,'ShowCart'])->name('show.cart');
   Route::get('order/checkout',[OrderController::class,'ShowCheckOutDetail'])->name('show.checkout')->middleware('checkUser');
   Route::get('order/checkout-detail',[OrderController::class,'ShowCheckOutDetail'])->name('show.checkout.detail');
   Route::post('order/saving/order',[OrderController::class,'saveOder'])->name('save.order');
   Route::get('order/successful',function(){

    return view('frontend.thankyou');
   })->name('thankyou');

   Route::get('faqs',function(){

    return view('frontend.faqs');
   })->name('faqs');

   Route::get('contact-info',function(){

    return view('frontend.contact');
   })->name('contact.us');

   Route::get('order/save/password',[OrderController::class,'savePassword'])->name('save.password');

                           #end of orders
});


    //END OF ALL FRONTEND ROUTES


    // ALL ADMIN PANEL ROUTES

    Route::group(['as'=>'admin.','middleware' => 'auth'], function(){
        Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');

                                    // P r o d u c t   s e c t i o n
        Route::get('product/show/list',[ProductController::class,'showProductList'])->name('show.product.list');
        Route::get('product/show/add',[ProductController::class,'addProductShow'])->name('show.add.product');
        Route::post('add/product',[ProductController::class,'addProduct'])->name('add.product');
        Route::get('product/show/update/{id?}',[ProductController::class,'updateProductShow'])->name('show.update.product');
        Route::post('update/product/{id?}',[ProductController::class,'updateProduct'])->name('update.product');
        Route::get('delete/product/{id?}',[ProductController::class,'deleteProduct'])->name('delete.product');

                                      // B r a n d   s e c t i o n
         Route::get('brand/show/list',[BrandController::class,'showbrandList'])->name('show.brand.list');
         Route::get('brand/show/add',[BrandController::class,'addbrandShow'])->name('show.add.brand');
         Route::post('add/brand',[BrandController::class,'addbrand'])->name('add.brand');
         Route::get('brand/show/update/{id?}',[BrandController::class,'updatebrandShow'])->name('show.update.brand');
         Route::post('update/brand/{id?}',[BrandController::class,'updatebrand'])->name('update.brand');
         Route::get('delete/brand/{id?}',[BrandController::class,'deletebrand'])->name('delete.brand');
          
                                    // C a t e g o r i e s   s e c t i o n
        Route::get('category/show/list',[CategoryController::class,'showcategoryList'])->name('show.category.list');
        Route::get('category/show/add',[CategoryController::class,'addcategoryShow'])->name('show.add.category');
        Route::post('add/category',[CategoryController::class,'addcategory'])->name('add.category');
        Route::get('category/show/update/{id?}',[CategoryController::class,'updatecategoryShow'])->name('show.update.category');
        Route::post('update/category/{id?}',[CategoryController::class,'updatecategory'])->name('update.category');
        Route::get('delete/category/{id?}',[CategoryController::class,'deletecategory'])->name('delete.category');
                
                                    // D e p a r t m e n t   s e c t i o n
        Route::get('department/show/list',[DepartmentController::class,'showdepartmentList'])->name('show.department.list');
        Route::get('department/show/add',[DepartmentController::class,'adddepartmentShow'])->name('show.add.department');
        Route::post('add/department',[DepartmentController::class,'adddepartment'])->name('add.department');
        Route::get('department/show/update/{id?}',[DepartmentController::class,'updatedepartmentShow'])->name('show.update.department');
        Route::post('update/department/{id?}',[DepartmentController::class,'updatedepartment'])->name('update.department');
        Route::get('delete/department/{id?}',[DepartmentController::class,'deletedepartment'])->name('delete.department');
        
          
                                            // O r d e r s   s e c t i o n
        Route::get('order/show/list',[BackOrderController::class,'showorderList'])->name('show.order.list');
        Route::get('order/show/add',[BackOrderController::class,'addorderShow'])->name('show.add.order');
        Route::post('add/order',[BackOrderController::class,'addorder'])->name('add.order');
        Route::get('order/show/update/{id?}',[BackOrderController::class,'updateorderShow'])->name('show.update.order');
        Route::get('order/print/{id?}',[BackOrderController::class,'orderPrint'])->name('order.print');
        Route::post('update/order/{id?}',[BackOrderController::class,'updateorder'])->name('update.order');
        Route::get('delete/order/{id?}',[BackOrderController::class,'deleteorder'])->name('delete.order');
        
                                        // R e v i e w   s e c t i o n
        Route::get('review/show/list',[ReviewController::class,'showreviewList'])->name('show.review.list');
        // Route::get('show/add/review',[ReviewController::class,'addreviewShow'])->name('show.add.review');
        // Route::post('add/review',[ReviewController::class,'addreview'])->name('add.review');
        // Route::get('show/update/review/{id?}',[ReviewController::class,'updatereviewShow'])->name('show.update.review');
        Route::post('update/review/{id?}',[ReviewController::class,'updatereview'])->name('update.review');
        Route::get('delete/review/{id?}',[ReviewController::class,'deletereview'])->name('delete.review');

                                  // S c e n t & N o t e s   s e c t i o n
        Route::get('scent/show/list',[ScentController::class,'showscentList'])->name('show.scent.list');
        Route::get('scent/show/add',[ScentController::class,'addscentShow'])->name('show.add.scent');
        Route::post('add/scent',[ScentController::class,'addscent'])->name('add.scent');
        Route::get('scent/show/update/{id?}',[ScentController::class,'updatescentShow'])->name('show.update.scent');
        Route::post('update/scent/{id?}',[ScentController::class,'updatescent'])->name('update.scent');
        Route::get('delete/scent/{id?}',[ScentController::class,'deletescent'])->name('delete.scent');


                                   // T y p e s   s e c t i o n
             Route::get('type/show/list',[TypeController::class,'showtypeList'])->name('show.type.list');
             Route::get('type/show/add',[TypeController::class,'addtypeShow'])->name('show.add.type');
             Route::post('add/type',[TypeController::class,'addtype'])->name('add.type');
             Route::get('type/show/update/{id?}',[TypeController::class,'updatetypeShow'])->name('show.update.type');
             Route::post('update/type/{id?}',[TypeController::class,'updatetype'])->name('update.type');
             Route::get('delete/type/{id?}',[TypeController::class,'deletetype'])->name('delete.type');

                                    // S l i d e r s   s e c t i o n
             Route::get('slider/show/list',[SliderController::class,'showsliderList'])->name('show.slider.list');
             Route::get('slider/show/add',[SliderController::class,'addsliderShow'])->name('show.add.slider');
             Route::post('add/slider',[SliderController::class,'addslider'])->name('add.slider');
             Route::get('slider/show/update/{id?}',[SliderController::class,'updatesliderShow'])->name('show.update.slider');
             Route::post('update/slider/{id?}',[SliderController::class,'updateslider'])->name('update.slider');
             Route::get('delete/slider/{id?}',[SliderController::class,'deleteslider'])->name('delete.slider');


                                         // P r o f i l e   s e c t i o n
              Route::get('profile/show',[ProfileController::class,'showprofileList'])->name('show.profile.list');
              Route::post('update/profile',[ProfileController::class,'updateprofile'])->name('update.profile');


                                    // l o g o u t 


            Route::get('logout', [DashboardController::class,'logout'])->name('logout');

            //   Route::get('slider/show/add',[SliderController::class,'addsliderShow'])->name('show.add.slider');
            //   Route::post('add/slider',[SliderController::class,'addslider'])->name('add.slider');
            //   Route::get('slider/show/update/{id?}',[SliderController::class,'updatesliderShow'])->name('show.update.slider');
             
            //   Route::get('delete/slider/{id?}',[SliderController::class,'deleteslider'])->name('delete.slider');









    });

    // END OF ADMIN PANEL ROUTES



























Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
