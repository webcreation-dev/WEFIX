<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MergeOrderItemAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_item_id',
        'attribute_name_id'
    ];

    public static function getProduct($order_item_id) {
        $order_item =  OrderItem::find($order_item_id);
        return Product::find($order_item->product_id);
    }

    public static function getOrder($order_item_id) {
        $order_item =  OrderItem::find($order_item_id);
        return Order::find($order_item->order_id);
    }
}
