<?php

namespace App\Http\Livewire;

use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\Attribute;
use App\Models\Ecommerce\AttributeName;
use App\Models\ProductDevices;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ShopController extends Component
{
    public $checkedProductDevices = [];
    public $checkedCategories = [];
    public $checkedAttributes = [];
    public $attributeNames;

    public function render()
    {

        $filter = Session::get('filter');
        $productsQuery = Product::query();

        if (isset($filter['attributes']) && is_array($filter['attributes']) && count($filter['attributes']) > 0) {
            foreach ($filter['attributes'] as $attributeId => $attributeValues) {
                foreach ($attributeValues as $attributeValue) {
                    $this->checkedAttributes[$attributeValue] = true;
                }
            }
        }

        if (isset($filter['product_device']) && is_array($filter['product_device'])) {
            foreach ($filter['product_device'] as $categoryId) {
                $this->checkedProductDevices[$categoryId] = true;
            }
        }

        // Filtre par catégorie
        if (isset($filter['product_device'])  && count($filter['product_device']) > 0) {

            $product_device_id = $filter['product_device'];
            $product_device_id = ProductDevices::findMany($product_device_id)->pluck('id')->toArray();

            $categories = Category::findMany($product_device_id);


            $atLeastOneNonEmpty = false;
            foreach ($filter['categories'] as $itemId => $category) {
                if (!empty($category)) {
                    $atLeastOneNonEmpty = true;
                    break;
                }
            }
            $mergedArray = [];
            if($atLeastOneNonEmpty) {

                $mergedArray = array_reduce($filter['categories'], function ($carry, $item) {
                    if (is_array($item)) {
                        return array_merge($carry, $item);
                    }
                    return $carry;
                }, []);
                $product_device_id = Category::findMany($mergedArray)->pluck('product_device_id')->toArray();
            }

            $productsQuery->whereHas('category', function ($query) use ($product_device_id) {
                $query->whereIn('category_id', $product_device_id);
            });
        }

        $wishlist = Session::get('wishlist');
        $product_devices = new ProductDevices();
        $products = Product::all();
        $attributes = Attribute::all();

        return view('livewire.shop', [
            'product_devices' => $product_devices,
            'products' => $productsQuery->get(),
            'attributes' => $attributes,
            'wishlist' => $wishlist,
            'categories' => $categories ?? [],
        ]);
    }

    public function wishlist($product){

        $wishlist = Session::get('wishlist');

        if(in_array($product, $wishlist)){
            $index = array_search($product, $wishlist);
            unset($wishlist[$index]);
        }else{
            $wishlist[] = $product;
        }

        Session::put('wishlist', $wishlist);
    }

    public function checkProductWishlist($product){

        $wishlist = Session::get('wishlist');
        $status = '';

        if (in_array($product, $wishlist)) {
            $status = 'active';
        }

        return $status;
    }


    public function updatedCheckedCategories() {

        $filter = Session::get('filter');

        foreach ($this->checkedCategories as $itemId => $isChecked) {

            $product_device_id = Category::where('product_device_id', $itemId)->value('id');

            $exist = in_array($itemId, $filter['categories'][$product_device_id]);

            if ($isChecked) {
                if (!$exist) {
                    $filter['categories'][$product_device_id][] = $itemId;
                    Session::put('filter', $filter);
                }
            } else {
                if ($exist) {
                    $index = array_search($itemId, $filter['categories'][$product_device_id]);
                    unset($filter['categories'][$product_device_id][$index]);
                    Session::put('filter', $filter);
                }
            }
        }

    }


    public function updatedCheckedProductDevices()
    {
        foreach ($this->checkedProductDevices as $itemId => $isChecked) {
            $filter = Session::get('filter');

            if (!array_key_exists('product_device', $filter)) {
                $filter['product_device'] = [];
            }


            $exist = in_array($itemId, $filter['product_device']);

            if ($isChecked) {
                if (!$exist) {
                    $filter['product_device'][] = $itemId;
                    $filter['categories'][$itemId] = [];
                    Session::put('filter', $filter);
                }
            } else {
                if ($exist) {
                    $index = array_search($itemId, $filter['product_device']);
                    unset($filter['product_device'][$index]);
                    unset($filter['categories'][$itemId]);
                    Session::put('filter', $filter);
                }
            }
        }
    }

    public function updatedCheckedAttributes()
    {
        $filter = Session::get('filter');

        if (!array_key_exists('product_device', $filter)) {
            $filter['product_device'] = [];
        }

        if (!isset($filter['attributes']) || !is_array($filter['attributes'])) {
            $filter['attributes'] = [];
        }



        foreach ($this->checkedAttributes as $itemId => $isChecked) {


            $attributeId = AttributeName::find($itemId)->attribute_id;
            if (!array_key_exists($attributeId, $filter['attributes'])) {
                $filter['attributes'][$attributeId] = [];
            }

            $index = array_search($itemId, $filter['attributes'][$attributeId]);

            if ($isChecked) {
                if ($index === false) {
                    $filter['attributes'][$attributeId][] = $itemId;
                }
            } else {
                if ($index !== false) {
                    unset($filter['attributes'][$attributeId][$index]);
                }
            }
        }
        Session::put('filter', $filter);
    }

    public function checkedColorAttributes($attributeNameId){

        $filter = Session::get('filter');

        if (!array_key_exists('product_device', $filter)) {
            $filter['product_device'] = [];
        }

        if (!isset($filter['attributes']) || !is_array($filter['attributes'])) {
            $filter['attributes'] = [];
        }

        $attributeId = AttributeName::find($attributeNameId)->attribute_id;

        if (!array_key_exists($attributeId, $filter['attributes'])) {
            $filter['attributes'][$attributeId] = [];
        }

            $index = array_search($attributeNameId, $filter['attributes'][$attributeId]);

            if ($index === false) {
                    $filter['attributes'][$attributeId][] = $attributeNameId;
            }else {
                unset($filter['attributes'][$attributeId][$index]);
            }

        Session::put('filter', $filter);
    }



}
