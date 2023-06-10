<?php

namespace App\Http\Livewire;

use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\Attribute;
use App\Models\Ecommerce\AttributeName;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ShopController extends Component
{
    public $checkedCategories = [];
    public $checkedAttributes = [];
    public $attributeNames;

    public function render()
    {

        $categories = new Category();
        $products = Product::all();
        $attributes = Attribute::all();

        return view('livewire.shop', [
            'categories' => $categories,
            'products' => $products,
            'attributes' => $attributes,
        ]);
    }


    public function updatedCheckedCategories()
    {
        foreach ($this->checkedCategories as $itemId => $isChecked) {
            $filter = Session::get('filter');

            if (!array_key_exists('categorie', $filter)) {
                $filter['categorie'] = [];
            }

            $index = array_search($itemId, $filter['categorie']);

            if ($isChecked) {
                if ($index === false) {
                    $filter['categorie'][] = $itemId;
                }
            } else {
                if ($index !== false) {
                    unset($filter['categorie'][$index]);
                }
            }

        }
        Session::put('filter', $filter);

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


    // public function addWhishlist($product)
    // {
    //     $cart = Session::get('cart');
    //     $cart[$product]['status'] = 'cart';
    //     if(!array_key_exists('quantity', $cart[$product])){
    //         $cart[$product]['quantity'] = 1;
    //     }

    //     Session::put('cart', $cart);
    // }

    public function toggleCategory($categoryId)
    {
        dd($categoryId);
        $filter = Session::get('filter');
        $index = array_search($categoryId, $filter['categorie']);

        if ($index !== false) {
            unset($filter['categorie'][$index]);
            $filter['categorie'] = array_values($filter['categorie']);
        } else {
            $filter['categorie'][] = $categoryId;
        }

        Session::put('filter', $filter);
    }

}
