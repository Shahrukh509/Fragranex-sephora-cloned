<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function OneOrderDetail(){

        return $this->hasOne(OrderDetail::class,'order_id','id');
    }


    public function orderDetail(){

        return $this->hasMany(OrderDetail::class,'order_id','id');
    }


    public function user(){

        return $this->belongsTo(User::class);
    }


    
}
