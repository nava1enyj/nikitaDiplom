<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'adress_id',
        'quantity',
        'price',
        'status'
    ];


    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function products()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }


    public function adresses()
    {
        return $this->belongsTo('App\Models\Adress', 'adress_id', 'id');
    }
}
