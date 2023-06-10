<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
    ];
    protected $appends = ['total'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function getTotalAttribute()
    {
        $product = Product::find($this->product_id);
        return $product->reduction_price * $this->quantity;
    }

}
