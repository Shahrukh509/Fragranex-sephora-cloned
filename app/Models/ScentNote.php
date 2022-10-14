<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScentNote extends Model
{
    use HasFactory;



    protected $guarded=[];


    public function product(){


    	return $this->hasOne(Product::class,'scent_notes_id','id');
    }
}

