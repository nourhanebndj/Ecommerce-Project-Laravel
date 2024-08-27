<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $fillable = ['name', 'arabic_name', 'post_code', 'wilaya_id', 'longitude', 'latitude'];

    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}