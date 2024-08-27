<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
protected $fillable = ['name', 'arabic_name', 'longitude', 'latitude'];

public function communes()
{
return $this->hasMany(Commune::class);
}

public function orders()
{
return $this->hasMany(Order::class);
}
}