<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class AttributeName extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'attribute_id'
    ];

    public static function getAttributeName($id){
        return self::find($id);
    }


    public function checkedFilterAttributes($attributeId, $attributeNameId){

        $filter = Session::get('filter');

        if (!array_key_exists('product_device', $filter)) {
            $filter['product_device'] = [];
        }

        if (!isset($filter['attributes']) || !is_array($filter['attributes'])) {
            $filter['attributes'] = [];
        }

        if (!array_key_exists($attributeId, $filter['attributes'])) {
            $filter['attributes'][$attributeId] = [];
        }

        $index = array_search($attributeNameId, $filter['attributes'][$attributeId]);

        if ($index === false) {
            return false;
        }else {
            return true;
        }

    }
}
