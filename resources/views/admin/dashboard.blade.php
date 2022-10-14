@extends('admin.layouts.master')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="fa fa-money" aria-hidden="true"></i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Today's Money</p>
              <h4 class="mb-0">Rs {{ $today_amount }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            @php
            $m_final = 0;
            $amount_perc = 0;
            if($c_week_money){

              $m_final = $c_week_money - $l_week_money;
            $amount_perc = (int) round(($m_final/($c_week_money + $l_week_money)) *100);
            }

            // dd($amount_perc);

            @endphp
          
            <p class="mb-0"><span class="text-{{ ($m_final > 0)? 'success':'danger' }} text-sm font-weight-bolder">{{ ($amount_perc)?'+':'-' }}{{ $amount_perc }}% </span>than last week</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Today's Users</p>
              <h4 class="mb-0">{{ $today_users }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            @php
            $f_u = 0;
            $perc_users = 0;
            if($user_this_month){

              $f_u = $user_this_month - $user_last_month;
              $perc_users = (int) round(($f_u/($user_this_month + $user_last_month)) *100);
            }

            @endphp
            <p class="mb-0"><span class="text-{{ ($f_u > 0)? 'success':'danger' }} text-sm font-weight-bolder">{{ ($perc_users)?'+':'-' }} {{ $perc_users }}% </span>than last month</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="fa fa-check" aria-hidden="true"></i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Orders Completed</p>
              <h4 class="mb-0">{{ $orders_completed }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            @php
            $f_o =0;

            $perc_c_o = 0;

            if($orders_today){

              $f_o = $orders_today - $orders_yest;
                $perc_c_o = (int) round(($f_o/($orders_today + $orders_yest)) *100);
            }

            @endphp
            <p class="mb-0"><span class="text-{{ ($perc_c_o)? 'success':'danger' }} text-sm font-weight-bolder">{{ ($perc_c_o)?'+':'-' }} {{ $perc_c_o }}% </span>than yesterday</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-danger shadow-info text-center border-radius-xl mt-n4 position-absolute">
              <i class="fas fa-spinner fa-spin"></i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Order Pending</p>
              <h4 class="mb-0">{{ $orders_pending }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">

            @php
            $f_p =0;

            $perc_c_p = 0;

            if($orders_today){

              $f_p = $orders_pending_today - $orders_pending_yest;

                $perc_c_p = (int) round(($$f_p/($orders_pending_today + $orders_pending_yest)) *100);
            }

            @endphp

<p class="mb-0"><span class="text-{{ ($perc_c_p)? 'success':'danger' }} text-sm font-weight-bolder">{{ ($perc_c_p)?'+':'-' }} {{ $perc_c_p }}% </span>than yesterday</p>
          </div>
        </div>
      </div>
    </div>


@endsection
