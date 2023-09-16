<?php

namespace Database\Seeders;

use App\Models\Ecommerce\Category;
use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\ProductCategory;
use App\Models\Ecommerce\ProductImage;
use App\Models\Ecommerce\Attribute;
use App\Models\Ecommerce\AttributeName;
use App\Models\Ecommerce\MergeProductAttributeName;
use App\Models\ProductDevices;
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


        ProductDevices::create(['name' => 'Apple']);
        ProductDevices::create(['name' => 'MacBook']);
        ProductDevices::create(['name' => 'iPad']);
        ProductDevices::create(['name' => 'Consoles & Jeux']);
        ProductDevices::create(['name' => 'AirPods']);
        ProductDevices::create(['name' => 'Ordinateurs']);

        $categories = ['Iphone', 'Mackbook R', 'Ipad Pro', 'PSP', 'FreePods Oraimo', 'HP'];
        $i = 0;

        foreach ($categories as $categorie) {
            $i++;
            Category::create([
                'name' => $categorie,
                'product_device_id' => $i
            ]);
        }

        Attribute::create(['name' => 'Capacité de stockage (Go)']);
        AttributeName::create(['attribute_id' => 1, 'name' => '64 Go']);
        AttributeName::create(['attribute_id' => 1, 'name' => '128 Go']);
        AttributeName::create(['attribute_id' => 1, 'name' => '256 Go']);
        AttributeName::create(['attribute_id' => 1, 'name' => '512 Go']);

        Attribute::create(['name' => 'Couleur']);
        AttributeName::create(['attribute_id' => 2, 'name' => 'gray']);
        AttributeName::create(['attribute_id' => 2, 'name' => 'red']);
        AttributeName::create(['attribute_id' => 2, 'name' => '#DAA520']);
        AttributeName::create(['attribute_id' => 2, 'name' => '#C0C0C0']);
        AttributeName::create(['attribute_id' => 2, 'name' => '#d473d4']);
        AttributeName::create(['attribute_id' => 2, 'name' => 'black']);
        AttributeName::create(['attribute_id' => 2, 'name' => 'blue']);

        Attribute::create(['name' => 'Condition']);
        AttributeName::create(['attribute_id' => 3, 'name' => 'En savoir plus']);
        AttributeName::create(['attribute_id' => 3, 'name' => 'État correct']);
        AttributeName::create(['attribute_id' => 3, 'name' => 'Très bon état']);
        AttributeName::create(['attribute_id' => 3, 'name' => 'Parfait état']);


        /*for ($i = 1; $i < 7; $i++) {
            Product::create([
                'name'  => 'MacBook Air 13.3 v'.$i.' (2020)',
                'price' => 11990.00 + ($i*100),
                'percentage_reduction'  => $i * 10 * 0.5,
                'reduction_price'  => (11990.00 + ($i*100)) * (1 - ($i * 10 * 0.5 / 100)),
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
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }

            ProductCategory::create([
                'product_id' => $i,
                'category_id' => 1
            ]);
        }*/

        // Iphone 8
            Product::create([
                'name'  => 'Iphone 8',
                'price' => 150,
                'percentage_reduction'  => 0,
                'reduction_price'  => 0,
                'star'  => 4,
                'note'  => 4.2,
                'reviews_number'  => 54,
                'description' => "L'iPhone 8 de première génération, sorti en septembre 2017,
                est doté d'une batterie de 1821 mAh, de 2 Go de RAM, et d'un écran LED de 4,7 pouces.
                Il fonctionne sous iOS 11, est alimenté par la puce Apple A11, et dispose d'un appareil
                photo de 12 mégapixels. Il est compatible avec le réseau 4G et utilise un connecteur
                Lightning. Le modèle A1863, A1905, A1906, ou A1907 est équipé d'une carte SIM unique,
                et il est classé en grade A.",
            ]);
            // for ($j = 1; $j < 6; $j++) {
                ProductImage::create([
                    'product_id' => 1,
                    'image' => 'iphone-8.png'
                ]);
            // }
            for ($k = 1; $k < 4; $k++) {
                MergeProductAttributeName::create([
                    'product_id' => 1,
                    'attribute_name_id' => $k,
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }
            for ($k = 5; $k < 9; $k++) {
                MergeProductAttributeName::create([
                    'product_id' => 1,
                    'attribute_name_id' => $k,
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }
            for ($k = 12; $k < 16; $k++) {
                MergeProductAttributeName::create([
                    'product_id' => 1,
                    'attribute_name_id' => $k,
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }

            ProductCategory::create([
                'product_id' => 1,
                'category_id' => 1
            ]);

        // Iphone XR
            Product::create([
                'name'  => 'Iphone XR',
                'price' => 249,
                'percentage_reduction'  => 0,
                'reduction_price'  => 0,
                'star'  => 4,
                'note'  => 4.2,
                'reviews_number'  => 54,
                'description' => "L'iPhone XR sorti en octobre 2018 offre une batterie de 2942 mAh, 3 Go de RAM, et un grand écran LCD de 6,1 pouces. Il fonctionne sous iOS 12, est alimenté par la puce Apple A12, et propose un appareil photo de 12 mégapixels. Il est compatible avec le réseau 4G et utilise un connecteur Lightning. Les modèles A2105 et A2106 prennent en charge une carte SIM unique ainsi qu'une eSIM, et il est classé en grade A.",
            ]);
            // for ($j = 1; $j < 6; $j++) {
                ProductImage::create([
                    'product_id' => 2,
                    'image' => 'iphone-xr.png'
                ]);
            // }
            for ($k = 1; $k < 4; $k++) {
                MergeProductAttributeName::create([
                    'product_id' => 2,
                    'attribute_name_id' => $k,
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }
            MergeProductAttributeName::create([
                'product_id' => 2,
                'attribute_name_id' => 6,
                'price' => 0,
                'reduction_price' =>0,
            ]);
            for ($k = 12; $k < 16; $k++) {
                MergeProductAttributeName::create([
                    'product_id' => 2,
                    'attribute_name_id' => $k,
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }
            ProductCategory::create([
                'product_id' => 2,
                'category_id' => 1
            ]);

        // Iphone 11
            Product::create([
                'name'  => 'Iphone 11',
                'price' => 359,
                'percentage_reduction'  => 0,
                'reduction_price'  => 0,
                'star'  => 4,
                'note'  => 4.2,
                'reviews_number'  => 54,
                'description' => "Le modèle d'iPhone 11 de septembre 2019 dispose d'une batterie de 3110 mAh, de 4 Go de RAM, et d'un écran LCD de 6,1 pouces. Il fonctionne sous iOS 13, est équipé de la puce Apple A13, et offre un appareil photo de 12 mégapixels. Il est compatible avec le réseau 4G, utilise un connecteur Lightning, et le modèle A2221 prend en charge une carte SIM unique ainsi qu'une eSIM. Il est classé en grade A+.",
            ]);
            // for ($j = 1; $j < 6; $j++) {
                ProductImage::create([
                    'product_id' => 3,
                    'image' => 'iphone-11.png'
                ]);
            // }
            MergeProductAttributeName::create([
                'product_id' => 3,
                'attribute_name_id' => 1,
                'price' => 0,
                'reduction_price' =>0,
            ]);
            MergeProductAttributeName::create([
                'product_id' => 3,
                'attribute_name_id' => 9,
                'price' => 0,
                'reduction_price' =>0,
            ]);
            for ($k = 12; $k < 16; $k++) {
                MergeProductAttributeName::create([
                    'product_id' => 3,
                    'attribute_name_id' => $k,
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }
            ProductCategory::create([
                'product_id' => 3,
                'category_id' => 1
            ]);

        // Iphone 11 Pro
            Product::create([
                'name'  => 'Iphone 11 Pro',
                'price' => 449,
                'percentage_reduction'  => 0,
                'reduction_price'  => 0,
                'star'  => 4,
                'note'  => 4.2,
                'reviews_number'  => 54,
                'description' => "Sorti en septembre 2019, cet iPhone propose une batterie de 3046 mAh, 4 Go de RAM, et un écran OLED de 5,8 pouces. Il fonctionne sous iOS 13, est alimenté par la puce Apple A13, et offre un appareil photo de 12 mégapixels. Il est compatible avec le réseau 4G, utilise un connecteur Lightning, et le modèle A2215 prend en charge une carte SIM unique ainsi qu'une eSIM. Il est classé en grade A.",
            ]);
            // for ($j = 1; $j < 6; $j++) {
                ProductImage::create([
                    'product_id' => 4,
                    'image' => 'iphone-11-pro.png'
                ]);
            // }
            MergeProductAttributeName::create([
                'product_id' => 4,
                'attribute_name_id' => 1,
                'price' => 0,
                'reduction_price' =>0,
            ]);
            MergeProductAttributeName::create([
                'product_id' => 4,
                'attribute_name_id' => 5,
                'price' => 0,
                'reduction_price' =>0,
            ]);
            for ($k = 12; $k < 16; $k++) {
                MergeProductAttributeName::create([
                    'product_id' => 4,
                    'attribute_name_id' => $k,
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }
            ProductCategory::create([
                'product_id' => 4,
                'category_id' => 1
            ]);

        // Iphone 13
            Product::create([
                'name'  => 'Iphone 13',
                'price' => 699,
                'percentage_reduction'  => 0,
                'reduction_price'  => 0,
                'star'  => 4,
                'note'  => 4.2,
                'reviews_number'  => 54,
                'description' => "Le modèle d'iPhone 13 de septembre 2021 dispose d'une batterie de 3227 mAh, de 4 Go de RAM, et d'un écran OLED de 6,1 pouces. Il fonctionne sous iOS 15, est équipé de la puce Apple A15, et offre un appareil photo de 12 mégapixels. Il est compatible avec la connectivité 5G, utilise un connecteur Lightning, et le modèle A2633 prend en charge une carte SIM unique ainsi qu'une eSIM. Il est classé en grade A+.",
            ]);
            // for ($j = 1; $j < 6; $j++) {
                ProductImage::create([
                    'product_id' => 5,
                    'image' => 'iphone-13.png'
                ]);
            // }

            for ($k = 2; $k < 5; $k++) {
                MergeProductAttributeName::create([
                    'product_id' => 5,
                    'attribute_name_id' => $k,
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }
            MergeProductAttributeName::create([
                'product_id' => 5,
                'attribute_name_id' => 11,
                'price' => 0,
                'reduction_price' =>0,
            ]);
            for ($k = 12; $k < 16; $k++) {
                MergeProductAttributeName::create([
                    'product_id' => 5,
                    'attribute_name_id' => $k,
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }
            ProductCategory::create([
                'product_id' => 5,
                'category_id' => 1
            ]);

        // Iphone 13 Pro
            Product::create([
                'name'  => 'Iphone 13 Pro',
                'price' => 799,
                'percentage_reduction'  => 0,
                'reduction_price'  => 0,
                'star'  => 4,
                'note'  => 4.2,
                'reviews_number'  => 54,
                'description' => "L'iPhone 13 Pro de septembre 2021 est équipé d'une batterie de 3095 mAh, de 6 Go de RAM, et d'un écran OLED de 6,1 pouces. Il fonctionne sous iOS 15, est alimenté par la puce Apple A15, et propose un appareil photo de 12 mégapixels. Il est compatible avec la connectivité 5G, utilise un connecteur Lightning, et le modèle A2638 prend en charge une carte SIM unique ainsi qu'une eSIM. Il est classé en grade A+.",
            ]);
            // for ($j = 1; $j < 6; $j++) {
                ProductImage::create([
                    'product_id' => 6,
                    'image' => 'iphone-13-pro.png'
                ]);
            // }
            MergeProductAttributeName::create([
                'product_id' => 6,
                'attribute_name_id' => 2,
                'price' => 0,
                'reduction_price' =>0,
            ]);
            MergeProductAttributeName::create([
                'product_id' => 6,
                'attribute_name_id' => 7,
                'price' => 0,
                'reduction_price' =>0,
            ]);
            for ($k = 12; $k < 16; $k++) {
                MergeProductAttributeName::create([
                    'product_id' => 6,
                    'attribute_name_id' => $k,
                    'price' => 0,
                    'reduction_price' =>0,
                ]);
            }
            ProductCategory::create([
                'product_id' => 6,
                'category_id' => 1
            ]);

    }
}
