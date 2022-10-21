<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Brand;
use App\Models\Department;
use App\Models\Type;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\ScentNote;
use DB;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data['sliders'] = Slider::where('status',1)->orderBy('position','asc')->get();
        $data['brands'] = Brand::where('status',1)->get();
        $data['best_seller'] = Department::where('name','Best Sellers')->where('status',1)->first();
        $data['new_arrival'] = Department::where('name','like','%new arrival%')->where('status',1)->first();
        $data['types'] = Type::where('status',1)->get();

        // foreach($data['new_arrival']->product as $data){

        //  dd($data);

        // }
        // dd($data['new_arrival']->product);

        return view('frontend.home',$data);

    }

    public function ShoppingType($name='',$category=''){
    
    if($category == 'perfume' && $name == 'type'){

    

       $data['category'] = Category::where('slug','perfume-women')->first();
       $data['products'] = Product::where('category_id',$data['category']->id)->where('status',1)->paginate(10);
       $data['span'] = ['Shopping','Perfume'];
       $data['brands'] = Brand::where('status',1)->get()->toArray();
       $data['types'] = Type::where('status',1)->get()->toArray();
       $data['scents'] = ScentNote::where('status',1)->get()->toArray();
        $data['departments'] = Department::where('status',1)->get()->toArray();
       // dd($data['products']->currentPage());

    }
    
    if($category == 'fragrance' && $name == 'type'){

       $data['category'] = Category::where('slug','perfume-unisex')->first();
         $data['products'] = Product::where('category_id',$data['category']->id)->where('status',1)->paginate(10);
       $data['span'] = ['Shopping','Fragrance'];
       $data['brands'] = Brand::where('status',1)->get()->toArray();
       $data['types'] = Type::where('status',1)->get()->toArray();
       $data['scents'] = ScentNote::where('status',1)->get()->toArray();
        $data['departments'] = Department::where('status',1)->get()->toArray();

    }

   if($category == 'cologne' && $name == 'type'){

       $data['category'] = Category::where('slug','cologne-men')->first();
        $data['products'] = Product::where('category_id',$data['category']->id)->where('status',1)->paginate(10);
        $data['span'] = ['Shopping','Cologne'];
         $data['brands'] = Brand::where('status',1)->get()->toArray();
       $data['types'] = Type::where('status',1)->get()->toArray();
       $data['scents'] = ScentNote::where('status',1)->get()->toArray();
        $data['departments'] = Department::where('status',1)->get()->toArray();

    }

    if($name == 'sets' && !$category == ''){

    

         $type = Type::where('name',$category)->first();
        $data['products'] = Product::where('type_id',$type->id)->where('status',1)->paginate(10);
        $data['span'] = ['Shopping','Sets',$category];
         $data['brands'] = Brand::where('status',1)->get()->toArray();
       $data['types'] = Type::where('status',1)->get()->toArray();
       $data['scents'] = ScentNote::where('status',1)->get()->toArray();
        $data['departments'] = Department::where('status',1)->get()->toArray();


    }

    if($name == 'department' && !$category ==''){

        $dept = Department::where('slug',$category)->first();

         $data['products'] = Product::where('department_id',$dept->id)->where('status',1)->paginate(10);
        $data['span'] = ['Shopping',$category];
         $data['brands'] = Brand::where('status',1)->get()->toArray();
       $data['types'] = Type::where('status',1)->get()->toArray();
       $data['scents'] = ScentNote::where('status',1)->get()->toArray();
        $data['departments'] = Department::where('status',1)->get()->toArray();


    }

    // if($name == 'new'){


    //     $dept = Department::where('slug','new')->first();

    //      $data['products'] = Product::where('department_id',$dept->id)->where('status',1)->paginate(2);
    //     $data['span'] = ['Shopping','New'];
    //      $data['brands'] = Brand::where('status',1)->get()->toArray();
    //    $data['types'] = Type::where('status',1)->get()->toArray();
    //    $data['scents'] = ScentNote::where('status',1)->get()->toArray();
    //     $data['departments'] = Department::where('status',1)->get()->toArray();


    // }

    return view('frontend.overview',$data);
   


    }

    public function SeeProduct($parent='',$category='',$cat_id=''){


    

        if(!$category){

             $data['category'] = Category::where('slug','perfume-unisex')->first();
             $brand = Brand::where('slug',$parent)->first();
             $data['products'] = Product::where('brand_id',$brand->id)->where('status',1)->paginate(1);
           $data['span'] = ['Brand',$brand->name];
           $data['brands'] = Brand::where('status',1)->get()->toArray();
           $data['types'] = Type::where('status',1)->get()->toArray();
           $data['scents'] = ScentNote::where('status',1)->get()->toArray();
            $data['departments'] = Department::where('status',1)->get()->toArray();

            return view('frontend.product_overview',$data);
            // return view('frontend.product_detail_new',$data);




        }else{


           


               $brand_id = Brand::where('slug',$parent)->pluck('id')->first();
                // dd('hi');


               $data['span'] = ['Brand',$parent,$category];


               if($cat_id == ''){
                   
                   $data['product'] = Product::where('brand_id',$brand_id)->where('slug',$category)->where('status',1)->first();
                   
                   
               }else{
                    $data['product'] = Product::where('brand_id',$brand_id)->where('slug',$category)->where('category_id',$cat_id)->where('status',1)->first();
                    // dd($data['product']);
                   
               }  

        

                // return view('frontend.product_detail',$data);
                return view('frontend.product_detail_new',$data);
        }

    }

    public function selectSize(Request $request){

      $data['product'] = ProductVariation::where('id',$request->id)->where('status',1)->first();

      if($data){

        // dd($data);

        $view = (string) view('frontend.ajax.product_detail',$data);

        return response()->json([
          'success' => true,
          'view' => $view
        ]);
      }


    }
       

    public function AllBrands(){


       $data['alphabets'] = 
       ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N","O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z","ALL"];

       $data['brands'] = Brand::where('status',1)->orderBy('name')->get(); 
 
        return view('frontend.allbrands',$data); 


    }

    public function BrandByAlphabet($alphabet='',$category=''){
     
      $data['alphabets'] = 
       ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N","O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z","ALL"];
       // if($alphabet == 'ALL'){

       //    $data['brands'] = Brand::where('status',1)->where('name','like',$alphabet.'%')->where()->get();


       // }
       if($alphabet && $category){

        $cat = Category::where('status',1)->where('name',$category)->first();
        $products=[];

        foreach($cat->child as $child){

          
         $products[]=  Product::where('category_id',$child->id)->where('status',1)->with('brand')->first();

        }

        $brands=[];

        foreach($products as $bra){
        

        if(!empty($bra)){
            if($alphabet == 'ALL'){


               $brands[] = $bra->brand->where('status',1)->first();
            }else{

                 $brands[] = $bra->brand->where('name','like',$alphabet.'%')->first();
            }
     
         

        }

        


        }


        // dd($brands);

        $data['brands'] = collect($brands);


       }
       else{
 
         $data['brands'] = Brand::where('status',1)->where('name','like',$alphabet.'%')->get();

       }
       

        return view('frontend.allbrands',$data);  
     
    }


    public function Filtered(Request $request){
    
      // dd($request->search);

        if(!empty(request()->query()))
        {



                 $genderfilter = [];
                $brandfilter=[];
                $typefilter=[];
                 $deptfilter=[];
                 $scentfilter=[];
                 $prices=[];


          if(request()->query('GenderFilter')){



           foreach(request()->input('GenderFilter') as $gender){

            $gender = Category::where('name',$gender)->get();

             foreach($gender as $single){

              $genderfilter[] = $single->id;


             }
            }
          }



         if(request()->query('BrandFilter')){
          



           foreach(request()->input('BrandFilter') as $brand){

             $brand = Brand::where('name',$brand)->first();

             $brandfilter[] = $brand->id;
            
           }
         }

         if(request()->query('TypeFilter')){

           foreach(request()->input('TypeFilter') as $type){

            $type = Type::where('name',$type)->first();

             $typefilter[] = $type->id;
           }
         }

         if(request()->input('DepartmentFilter')){

           foreach(request()->input('DepartmentFilter') as $dept){

            $dept = Department::where('name',$dept)->first();

             $deptfilter[] = $dept->id;
           }
         }

         if(request()->query('ScentFilter')){

           foreach(request()->input('ScentFilter') as $scent){

             $scent = ScentNote::where('name',$scent)->first();

             $scentfilter[] = $scent->id;
           }
         }

         if(request()->query('PriceFilter')){

            // dd(request()->input('PriceFilter')); 

           foreach(request()->input('PriceFilter') as $price){

            $prices[]=$price;

            // dd($min);
           }
         }

         if(request()->query('InStockFilter')){

           $stock = 1;


         }else{

           $stock = 0; 
         }

        //  dd($prices[$price]);

         $orderby = request()->query('orderby');

         $orderby = 'desc';

         
          //  dd($prices);


         $data['products'] = DB::table('products')->when($genderfilter, function($query) use ($genderfilter) {
             $query->whereIn('category_id',$genderfilter);
         })->when($brandfilter, function($query) use ($brandfilter) {
             $query->whereIn('brand_id', $brandfilter);
         })->when($typefilter, function($query) use ($typefilter) {
             $query->whereIn('type_id', $typefilter);
         })->when($deptfilter, function($query) use ($deptfilter) {
             $query->whereIn('department_id', $deptfilter);
         })->when($scentfilter, function($query) use ($scentfilter) {
             $query->whereIn('scent_notes_id', $scentfilter);
         })->when($orderby, function($query) use ($orderby){
            $query->orderBy('price',$orderby??'desc');

         })->when($stock, function($query) use ($stock){
            $query->where('in_stock',$stock);

         })->when($prices, function($query) use ($prices){
          $query->Where('max_price','<=',$prices[count($prices)-1]);
        })->paginate(10);
         



         if($request->ajax()){


            $currentPage = $data['products']->currentPage();
            $last = $data['products']->lastPage();

            // dd($currentPage);


            $view = (string) view('frontend.ajax.filtered',$data);




                return response()->json([

                  'current' => $currentPage,
                  'last'    => $last,
                  'view'        => $view
                ]);




         }else{
           

            Session::push('gender',collect($genderfilter));
            Session::push('brand',collect($brandfilter));
            Session::push('type',collect($typefilter));
            Session::push('department',collect($deptfilter));
            Session::push('scent',collect($scentfilter));
            Session::push('prices',collect($prices));


            return (string) view('frontend.filtered',$data); 
           }

        }else{

              // $data['category'] = Category::where('slug','perfume-women')->first();
               $data['products'] = Product::where('status',1)->paginate(10);
               $data['span'] = ['Shopping','Perfume'];
               $data['brands'] = Brand::where('status',1)->get()->toArray();
               $data['types'] = Type::where('status',1)->get()->toArray();
               $data['scents'] = ScentNote::where('status',1)->get()->toArray();
                $data['departments'] = Department::where('status',1)->get()->toArray();

                return view('frontend.overview',$data);


      }



    }

    public function SearchQuery(Request $request){

      $data['products'] = Product::where('status',1)->paginate(10);
       $cat = Category::where('slug','like','%'.$request->search.'%')->where('parent_id','!=',null)->first('id');

      //  dd($cat);


       
       $brand =Brand::where('name','like','%'.$request->search.'%')->first('id');

       if($brand){

        $data['products'] = Product::where('brand_id',$brand->id)->paginate(10);


       }
       
       $department =Department::where('name','like','%'.$request->search.'%')->first('id');

       if($department){

        $data['products'] = Product::where('department_id',$department->id)->paginate(10);


       }
     
       $type = Type::where('name','like','%'.$request->search.'%')->first('id');
       
     

       if($type){
      
        
        $data['products'] = Product::where('type_id',$type->id)->paginate(10);
       


       }
       
       $scent =ScentNote::where('name','like','%'.$request->search.'%')->first('id');

       if($scent){

        $data['products'] = Product::where('scent_notes_id',$scent->id)->paginate(10);


       }

       if($cat){

        $data['products'] = Product::where('category_id',$cat->id)->paginate(10);


       }

        // dd($data['products']);

    return (string) view('frontend.filtered',$data); 


    }

    
}
