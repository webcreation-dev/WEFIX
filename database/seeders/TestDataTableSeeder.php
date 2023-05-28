<?php

namespace Database\Seeders;

use App\Models\Repair\BrandDevice;
use App\Models\Repair\FailureAttribute;
use App\Models\Repair\FailureDevice;
use App\Models\Repair\MergeFailureAttribute;
use App\Models\Repair\MergeModelFailure;
use App\Models\Repair\ModelBrand;
use App\Models\Repair\SheduleStore;
use App\Models\Repair\StoreDevice;
use App\Models\Repair\TypeDevice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Type d'appareils

        TypeDevice::create([
            'name' => 'SMARTPHONES',
            'image' => 'smartphones.svg',
        ]);
        TypeDevice::create([
            'name' => 'TABLETTES',
            'image' => 'tablettes.svg',
        ]);
        TypeDevice::create([
            'name' => 'CONSOLES',
            'image' => 'consoles.svg',
        ]);

        //Marques d'appareils
        BrandDevice::create([
            'image' => 'samsung.webp',
            'type_device_id' => 1
        ]);
        BrandDevice::create([
            'image' => 'apple.webp',
            'type_device_id' => 2
        ]);
        BrandDevice::create([
            'image' => 'NINTENDO.jpg',
            'type_device_id' => 3
        ]);

        //Modèles de marques
        ModelBrand::create([
            'name' => 'U12 PLUS',
            'image' => 'U12PLUS.png',
            'brand_device_id' => 1,
        ]);
        ModelBrand::create([
            'name' => 'IPAD 7EGE (10,2) 2019 A2197-A2198-A220',
            'image' => 'IPAD20197E.png',
            'brand_device_id' => 2,
        ]);
        ModelBrand::create([
            'name' => 'SWITCH',
            'image' => 'switch.webp',
            'brand_device_id' => 3,
        ]);

        // Attribut de pannes
        FailureAttribute::create([
            'name' => 'Noir',
            'code' => '#272727',
        ]);
        FailureAttribute::create([
            'name' => 'Gris',
            'code' => '#808080',
        ]);
        FailureAttribute::create([
            'name' => 'Crème',
            'code' => '#F0EBE1',
        ]);
        FailureAttribute::create([
            'name' => 'Jaune',
            'code' => '#FFFF00',
        ]);
        FailureAttribute::create([
            'name' => 'Mauve',
            'code' => '#D4C8DA',
        ]);
        FailureAttribute::create([
            'name' => 'Vert',
            'code' => '#12AD2B',
        ]);


        //Pannes d'appareils
        FailureDevice::create([
            'name' => 'Façade avant',
            'image' => 'FacadeAvant.png',
            'price' => '279.90',
            'reduction_price' => '251.91',
            'reduction' => '10',
            'rdv_online' => true,
            'code' => 'FA',
        ]);
        FailureDevice::create([
            'name' => 'Batterie',
            'image' => 'Batterie.png',
            'price' => '79.90',
            'reduction_price' => '63.92',
            'reduction' => '20',
            'rdv_online' => false,
            'code' => 'BA',
        ]);
        FailureDevice::create([
            'name' => 'Appareil photo arrière',
            'image' => 'AppareilPhotoArriere.png',
            'price' => '89.90',
            'reduction_price' => '71.92',
            'reduction' => '20',
            'rdv_online' => false,
            'code' => 'APA',
        ]);
        FailureDevice::create([
            'name' => 'Appareil photo avant',
            'image' => 'AppareilPhotoAvant.png',
            'price' => '59.90',
            'reduction_price' => '47.92',
            'reduction' => '20',
            'rdv_online' => false,
            'code' => 'APAV',
        ]);
        FailureDevice::create([
            'name' => ' Connecteur de charge',
            'image' => 'ConnecteurCharge.png',
            'price' => '69.90',
            'reduction_price' => '55.92',
            'reduction' => '20',
            'rdv_online' => false,
            'code' => 'CC',
        ]);
        FailureDevice::create([
            'name' => 'Façade arrière',
            'image' => 'FacadeArriere.png',
            'price' => '75.90',
            'reduction_price' => '60.72',
            'reduction' => '20',
            'rdv_online' => false,
            'code' => 'FAR',
        ]);
        FailureDevice::create([
            'name' => 'Haut-parleur',
            'image' => 'HautParleur.png',
            'price' => '39.90',
            'reduction_price' => '31.92',
            'reduction' => '20',
            'rdv_online' => false,
            'code' => 'HP',
        ]);
        FailureDevice::create([
            'name' => 'Diagnostic de la panne',
            'image' => 'autres.webp',
            'price' => '0',
            'reduction_price' => '0',
            'reduction' => '0',
            'rdv_online' => false,
            'code' => 'DP',
        ]);

        //Association des attributs de pannes aux pannes d'appareils
        MergeFailureAttribute::create([
            'failure_device_id' => 1,
            'failure_attribute_id' => 1,
        ]);
        MergeFailureAttribute::create([
            'failure_device_id' => 1,
            'failure_attribute_id' => 2,
        ]);
        MergeFailureAttribute::create([
            'failure_device_id' => 1,
            'failure_attribute_id' => 3,
        ]);
        MergeFailureAttribute::create([
            'failure_device_id' => 1,
            'failure_attribute_id' => 4,
        ]);
        MergeFailureAttribute::create([
            'failure_device_id' => 1,
            'failure_attribute_id' => 5,
        ]);
        MergeFailureAttribute::create([
            'failure_device_id' => 1,
            'failure_attribute_id' => 6,
        ]);

        MergeFailureAttribute::create([
            'failure_device_id' => 6,
            'failure_attribute_id' => 1,
        ]);
        MergeFailureAttribute::create([
            'failure_device_id' => 6,
            'failure_attribute_id' => 2,
        ]);
        MergeFailureAttribute::create([
            'failure_device_id' => 6,
            'failure_attribute_id' => 3,
        ]);
        MergeFailureAttribute::create([
            'failure_device_id' => 6,
            'failure_attribute_id' => 4,
        ]);
        MergeFailureAttribute::create([
            'failure_device_id' => 6,
            'failure_attribute_id' => 5,
        ]);
        MergeFailureAttribute::create([
            'failure_device_id' => 6,
            'failure_attribute_id' => 6,
        ]);

        //Association de pannes d'appareil aux modèles de marques

        MergeModelFailure::create([
            'model_brand_id' => 1,
            'failure_device_id' => 1,
        ]);
        MergeModelFailure::create([
            'model_brand_id' => 1,
            'failure_device_id' => 2,
        ]);
        MergeModelFailure::create([
            'model_brand_id' => 1,
            'failure_device_id' => 3,
        ]);

        MergeModelFailure::create([
            'model_brand_id' => 2,
            'failure_device_id' => 4,
        ]);
        MergeModelFailure::create([
            'model_brand_id' => 2,
            'failure_device_id' => 5,
        ]);
        MergeModelFailure::create([
            'model_brand_id' => 2,
            'failure_device_id' => 6,
        ]);

        MergeModelFailure::create([
            'model_brand_id' => 3,
            'failure_device_id' => 1,
        ]);
        MergeModelFailure::create([
            'model_brand_id' => 3,
            'failure_device_id' => 7,
        ]);
        MergeModelFailure::create([
            'model_brand_id' => 3,
            'failure_device_id' => 8,
        ]);

        // Boutiques
        StoreDevice::create([
            'name' => 'Centre commercial Cap 3000',
            'address' => 'Avenue Eugène Donadeï, 06700 Saint-Laurent-du-Var',
            'city' => 'France',
            'zip_code' => '06260',
        ]);
        StoreDevice::create([
            'name' => 'WeFix - Fnac Nice',
            'address' => '44 avenue Jean Médecin, 06000 Nice',
            'city' => 'France',
            'zip_code' => '06260',
        ]);
        StoreDevice::create([
            'name' => 'Fnac Cannes',
            'address' => '83 rue d\'Antibes, 06400 Cannes',
            'city' => 'France',
            'zip_code' => '06260',
        ]);

        //Horaire d'ouverture des boutiques

        SheduleStore::create([
            'store_device_id' => 1,
            'day' => 'Lundi',
            'hour_open' => '10:00',
            'hour_close' => '20:00',
        ]);
        SheduleStore::create([
            'store_device_id' => 1,
            'day' => 'Mardi',
            'hour_open' => '10:00',
            'hour_close' => '20:00',
        ]);
        SheduleStore::create([
            'store_device_id' => 1,
            'day' => 'Mercredi',
            'hour_open' => '10:00',
            'hour_close' => '20:00',
        ]);


        SheduleStore::create([
            'store_device_id' => 2,
            'day' => 'Jeudi',
            'hour_open' => '10:00',
            'hour_close' => '20:00',
        ]);
        SheduleStore::create([
            'store_device_id' => 2,
            'day' => 'Vendredi',
            'hour_open' => '10:00',
            'hour_close' => '20:00',
        ]);
        SheduleStore::create([
            'store_device_id' => 2,
            'day' => 'Lundi',
            'hour_open' => '10:00',
            'hour_close' => '20:00',
        ]);


        SheduleStore::create([
            'store_device_id' => 3,
            'day' => 'Jeudi',
            'hour_open' => '10:00',
            'hour_close' => '20:00',
        ]);
        SheduleStore::create([
            'store_device_id' => 3,
            'day' => 'Samedi',
            'hour_open' => '10:00',
            'hour_close' => '20:00',
        ]);
        SheduleStore::create([
            'store_device_id' => 3,
            'day' => 'Dimaanche',
            'hour_open' => '10:00',
            'hour_close' => '20:00',
        ]);

    }
}
