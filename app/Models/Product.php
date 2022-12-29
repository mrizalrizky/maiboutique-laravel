<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug',
        'image',
        'name',
        'description',
        'price',
        'stock'
    ];

    public function detail() {
        return $this->belongsToMany(TransactionDetail::class);
    }

    public function user() {
        return $this->belongsToMany(User::class, 'carts')->withPivot('qty');
    }


}
