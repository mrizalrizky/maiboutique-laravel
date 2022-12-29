<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'qty'
    ];

    // public function user() {
    //     return $this->hasOne(User::class, 'id');
    // }

    // public function product() {
    //     return $this->hasMany(Product::class, 'id');
    // }

}
