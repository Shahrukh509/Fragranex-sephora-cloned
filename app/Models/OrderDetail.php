<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function variable_product()
    {

      
        return $this->belongsTo(ProductVariation::class,'product_variation_id','id');
    }
}
