<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $guarded=[];

    public function parent(){

    	return $this->BelongsTo(Category::class);
    }

    public function child(){

    	return $this->hasMany(Category::class,'parent_id','id');
    }

    public function products(){

    	return $this->hasMany(Product::class,'category_id','id');
    }

    
}
