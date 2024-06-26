<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public $table = "produks";
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'categories',
        'buyprice',
        'sellprice',
        'stock',
    ];
}
