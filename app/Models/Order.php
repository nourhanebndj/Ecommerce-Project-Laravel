<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
use HasFactory;

protected $fillable = [
'client_id',
'lastname',
'phone',
'wilaya_id',
'commune_id',
'delivery',
'total_price',
];

public function items()
{
return $this->hasMany(OrderItem::class);
}

public function client()
{
return $this->belongsTo(User::class, 'client_id');
}
// In the Order model
public function wilaya()
{
    return $this->belongsTo(Wilaya::class);
}

public function commune()
{
    return $this->belongsTo(Commune::class);
}

}