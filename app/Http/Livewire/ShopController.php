<?php

namespace App\Http\Livewire;

use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\Attribute;
use App\Models\Ecommerce\AttributeName;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ShopController extends Component
{
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

        if (isset($filter['categorie']) && is_array($filter['categorie'])) {
            foreach ($filter['categorie'] as $categoryId) {
                $this->checkedCategories[$categoryId] = true;
            }
        }

        // Filtre par catégorie
        if (isset($filter['categorie'])  && count($filter['categorie']) > 0) {
            $categoryId = $filter['categorie'];
            $productsQuery->whereHas('category', function ($query) use ($categoryId) {
                $query->whereIn('category_id', $categoryId);
            });
        }

        // Filtre par attributs
        // if (isset($filter['attributes']) && is_array($filter['attributes'])) {
        //     foreach ($filter['attributes'] as $attributeId => $attributeValues) {
        //         // if(count($attributeValues) > 0){
        //             $productsQuery->whereHas('attributeNames', function ($query) use ($attributeId, $attributeValues) {
        //                 $attributeValues = Arr::flatten($attributeValues);
        //                 $query->whereIn('attribute_name_id', $attributeValues);
        //             });
        //         // }
        //     }
        // }

        $wishlist = Session::get('wishlist');
        $categories = new Category();
        $products = Product::all();
        $attributes = Attribute::all();

        return view('livewire.shop', [
            'categories' => $categories,
            'products' => $productsQuery->get(),
            'attributes' => $attributes,
            'wishlist' => $wishlist,
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


    public function updatedCheckedCategories()
    {
        foreach ($this->checkedCategories as $itemId => $isChecked) {
            $filter = Session::get('filter');

            if (!array_key_exists('categorie', $filter)) {
                $filter['categorie'] = [];
            }

            $exist = in_array($itemId, $filter['categorie']);

            if ($isChecked) {
                if (!$exist) {
                    $filter['categorie'][] = $itemId;
                    Session::put('filter', $filter);
                }
            } else {
                if ($exist) {
                    $index = array_search($itemId, $filter['categorie']);
                    unset($filter['categorie'][$index]);
                    Session::put('filter', $filter);
                }
            }
        }
    }

    public function updatedCheckedAttributes()
    {
        $filter = Session::get('filter');

        if (!array_key_exists('categorie', $filter)) {
            $filter['categorie'] = [];
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

        if (!array_key_exists('categorie', $filter)) {
            $filter['categorie'] = [];
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
