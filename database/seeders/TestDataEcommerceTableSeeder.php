<?php

namespace Database\Seeders;

use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\ProductCategory;
use App\Models\Ecommerce\ProductImage;
use App\Models\Ecommerce\Attribute;
use App\Models\Ecommerce\AttributeName;
use App\Models\Ecommerce\MergeProductAttributeName;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestDataEcommerceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create(['name' => 'Smartphones']);
        Category::create(['name' => 'MacBook']);
        Category::create(['name' => 'iPad']);
        Category::create(['name' => 'Consoles & Jeux']);
        Category::create(['name' => 'AirPods']);
        Category::create(['name' => 'Ordinateurs']);
        Category::create(['name' => 'iMac']);

        Attribute::create(['name' => 'Condition']);
        AttributeName::create(['attribute_id' => 1, 'name' => 'En savoir plus']);
        AttributeName::create(['attribute_id' => 1, 'name' => 'État correct']);
        AttributeName::create(['attribute_id' => 1, 'name' => 'Très bon état']);
        AttributeName::create(['attribute_id' => 1, 'name' => 'Parfait état']);


        Attribute::create(['name' => 'Capacité de stockage (Go)']);
        AttributeName::create(['attribute_id' => 2, 'name' => '256 Go']);
        AttributeName::create(['attribute_id' => 2, 'name' => '512 Go']);
        AttributeName::create(['attribute_id' => 2, 'name' => '1 To']);



        Attribute::create(['name' => 'Couleur']);
        AttributeName::create(['attribute_id' => 3, 'name' => 'black']);
        AttributeName::create(['attribute_id' => 3, 'name' => 'gray']);
        AttributeName::create(['attribute_id' => 3, 'name' => 'red']);
        AttributeName::create(['attribute_id' => 3, 'name' => 'blue']);
        AttributeName::create(['attribute_id' => 3, 'name' => 'green']);
        AttributeName::create(['attribute_id' => 3, 'name' => 'yellow']);

        for ($i = 1; $i < 8; $i++) {
            Product::create([
                'name'  => 'MacBook Air 13.3 v'.$i.' (2020)',
                'price' => 11990.00 + ($i*100),
                'reduction_price'  => 884.88 + ($i*100),
                'star'  => 4,
                'note'  => 4.2,
                'reviews_number'  => 54
            ]);

            for ($j = 1; $j < 6; $j++) {
                ProductImage::create([
                    'product_id' => $i,
                    'image' => 'product1-'.$j.'.jpg'
                ]);
            }

            for ($k = 1; $k < 14; $k++) {

                MergeProductAttributeName::create([
                    'product_id' => $i,
                    'attribute_name_id' => $k,
                    'price' => 11990.00 + ($i*200),
                    'reduction_price' => 884.88 + ($i*200),
                ]);
            }

            ProductCategory::create([
                'product_id' => $i,
                'category_id' => $i
            ]);
        }

    }
}
