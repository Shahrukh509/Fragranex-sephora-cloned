<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $guarded =[];


    public function image(){


    	return $this->hasOne(ProductImage::class,'product_id','id');
    }
    
    public function images(){


    	return $this->hasMany(ProductImage::class,'product_id','id');
    }


    // public function parent_image(){

    //     return $this->image()->where('product_variation_id',null)->where('status',1);
    // }

    public function variable_products(){

    	return $this->hasOne(ProductVariation::class,'product_id','id');
    }

    public function all_variable_products(){

        return $this->hasMany(ProductVariation::class,'product_id','id');
    }


   
    

    public function brand(){

    	return $this->belongsTo(Brand::class);
    }

    public function department(){

    	return $this->belongsTo(Department::class);
    }

    public function scentnotes(){

    	return $this->belongsTo(ScentNote::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function type(){

        return $this->belongsTo(Type::class);
}




}
