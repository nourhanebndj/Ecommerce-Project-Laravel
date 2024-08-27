<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function ligneCommande(){
        return $this->belongsTo(LigneCommande::class,'product_id','id');
    }
}