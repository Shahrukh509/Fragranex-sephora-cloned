<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use HasFactory;


    protected $guarded=[];


    public function product(){


    	return $this->belongsTo(Product::class);
    }


    public function image(){


    	return $this->hasOne(ProductImage::class,'product_variation_id','id');
    }

    public function images(){


    	return $this->hasMany(ProductImage::class,'product_variation_id','id');
    }

    public function delete_images(){

        return $this->images()->delete();
    }

    public function type(){

    	return $this->belongsTo(Type::class);
    }
}
