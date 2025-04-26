<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product_details';
    protected $fillable = [
        'product_image',
        'product_name',
        'category',
        'product_description',
        'product_price',
    ];
  
}
