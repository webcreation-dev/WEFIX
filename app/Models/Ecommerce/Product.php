<?php

namespace App\Models\Ecommerce;

use App\Models\ProductDevices;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'reduction_price',
        'percentage_reduction',
        'star',
        'note',
        'reviews_number',
        'description',
    ];

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function attributeNames()
    {
        return $this->belongsToMany(AttributeName::class, 'merge_product_attribute_names');
    }

    public function attributes()
    {
        $attributes_name_id = $this->belongsToMany(AttributeName::class, 'merge_product_attribute_names')
                                ->pluck('attribute_name_id')
                                ->toArray();

        $attributes_id = AttributeName::whereIn('id', $attributes_name_id)
                                    ->distinct('attribute_id')
                                    ->pluck('attribute_id')
                                    ->toArray();
        $attributes = Attribute::findMany($attributes_id);

        return $attributes;
    }

    public function checkIfAttributes() {
        $attributes_name_id = $this->belongsToMany(AttributeName::class, 'merge_product_attribute_names')
                                ->pluck('attribute_name_id')
                                ->toArray();

        $attributes_id = AttributeName::whereIn('id', $attributes_name_id)
                                    ->distinct('attribute_id')
                                    ->pluck('attribute_id')
                                    ->toArray();
        $attributes = Attribute::findMany($attributes_id);
        return $attributes->isNotEmpty();
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public static function productDevices($product_device_id)
    {
        $categories = ProductDevices::findMany($product_device_id)->categories;
        dd($categories);
    }

    public function isActive($product, $attribute, $attributeName){

        $cart = Session::get('cart');
        $status = ($cart[$product]['attributes'][$attribute] == $attributeName) ? true : false;
        return $status;
    }

    public function checkProductWishlist($product){

        $wishlist = Session::get('wishlist');
        $status = false;

        if (in_array($product, $wishlist)) {
            $status = true;
        }
        return $status;
    }
}
