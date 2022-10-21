<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Department;
use App\Models\ScentNote;
use App\Models\ProductVariation;
use App\Models\Order;
use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use Str;
use Carbon\Carbon;
use Auth;
class DashboardController extends Controller
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
            

            $data['today_amount'] = Order::whereDate('created_at',Carbon::today())->sum('total_amount');
            $data['today_users'] = User::whereDate('created_at',Carbon::today())->count();
            $data['c_week_money'] = Order::whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('total_amount');
            $data['l_week_money'] = Order::whereBetween('created_at',[Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->sum('total_amount');
            $data['user_this_month'] = User::whereMonth('created_at', Carbon::now()->month)->count();
            $data['user_last_month'] = User::whereMonth('created_at', Carbon::now()->subMonth())->count();
            $data['orders_completed'] = Order::where('status',1)->count();
            $data['orders_today'] = Order::where('status',1)->whereDate('created_at',Carbon::today())->count();
            $data['orders_yest'] = Order::where('status',1)->whereDate('created_at',Carbon::yesterday())->count();
            $data['orders_pending'] = Order::where('status',0)->count();
            $data['orders_pending_today'] = Order::where('status',0)->whereDate('created_at',Carbon::today())->count();
            $data['orders_pending_yest'] = Order::where('status',0)->whereDate('created_at',Carbon::yesterday())->count();   
          
            //  dd($data['user_this_month'],$data['user_last_month']);

            return view('admin.dashboard',$data);
        }


        public function logout(Request $request){

            Auth::logout();
            return redirect('/login');


        }


    
}
