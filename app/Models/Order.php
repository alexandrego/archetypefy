<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // use HasFactory;
    protected $fillable = [
        'customer_id',
        'order_id',
        'amount',
        'status',
    ];

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
