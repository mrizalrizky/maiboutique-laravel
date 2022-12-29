<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity'
    ];

    public function transaction() {
        return $this->hasOne(TransactionHeader::class, 'id', 'transaction_id');
    }

    public function product() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
