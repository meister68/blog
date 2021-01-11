<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    //
    protected $fillable = [
        'product_name',
        'product_price',
        'product_type'
    ];
}
