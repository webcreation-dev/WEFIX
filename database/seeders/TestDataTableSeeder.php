<?php

namespace Database\Seeders;

use App\Models\Repair\Family;
use App\Models\Repair\BrandDevice;
use App\Models\Repair\FailureAttribute;
use App\Models\Repair\FailureDevice;
use App\Models\Repair\MergeFailureAttribute;
use App\Models\Repair\MergeModelFailure;
use App\Models\Repair\ModelBrand;
use App\Models\Repair\SheduleStore;
use App\Models\Repair\StoreDevice;
use App\Models\Repair\TypeDevice;
use App\Models\Selling\MergeModelStepSelling;
use App\Models\Selling\QuestionStepSelling;
use App\Models\Selling\StepSelling;
use App\Models\Selling\MergeQuestionStepSelling;
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
            'image' => 'smartphones.jpg',
            'icon' => 'smartphones.svg',
            'estimate_price' => '800',
        ]);
        /*TypeDevice::create([
            'name' => 'TABLETTES',
            'image' => 'tablettes.jpg',
            'icon' => 'tablettes.svg',
            'estimate_price' => '650',
        ]);
        TypeDevice::create([
            'name' => 'CONSOLES',
            'image' => 'consoles.jpg',
            'icon' => 'consoles.svg',
            'estimate_price' => '600',
        ]);
        TypeDevice::create([
            'name' => 'APPAREILS AUDIO',
            'image' => 'audio.jpg',
            'icon' => 'audio.svg',
            'estimate_price' => '200',
        ]);
        TypeDevice::create([
            'name' => 'MACBOOK',
            'image' => 'macbook.jpg',
            'icon' => 'macbook.svg',
            'estimate_price' => '1300',
        ]);*/

        //Marques d'appareils
        BrandDevice::create([
            'name' => 'SAMSUNG',
            'image' => 'samsung.webp',
            'type_device_id' => 1
        ]);
        BrandDevice::create([
            'name' => 'APPLE',
            'image' => 'apple.webp',
            'type_device_id' => 1
        ]);
        BrandDevice::create([
            'name' => 'Huawei',
            'image' => 'samsung.webp',
            'type_device_id' => 1
        ]);
        BrandDevice::create([
            'name' => 'Ipad',
            'image' => 'samsung.webp',
            'type_device_id' => 1
        ]);

        //Famille de marques
        Family::create([
            'name' => 'Galaxy S',
            'image' => 'galaxy-s.png',
            'brand_device_id' => 1,
        ]);
        Family::create([
            'name' => 'Galaxy A',
            'image' => 'galaxy-a.png',
            'brand_device_id' => 1,
        ]);
        Family::create([
            'name' => 'Galaxy Z',
            'image' => 'galaxy-z.png',
            'brand_device_id' => 1,
        ]);
        Family::create([
            'name' => 'Galaxy Note',
            'image' => 'galaxy-z.png',
            'brand_device_id' => 1,
        ]);

        Family::create([
            'name' => 'Galaxy Tab',
            'image' => 'galaxy-z.png',
            'brand_device_id' => 1,
        ]);
        Family::create([
            'name' => 'Galaxy J',
            'image' => 'galaxy-z.png',
            'brand_device_id' => 1,
        ]);
        Family::create([
            'name' => 'Galaxy M',
            'image' => 'galaxy-z.png',
            'brand_device_id' => 1,
        ]);

        Family::create([
            'name' => 'Huawei Y_Nova',
            'image' => 'galaxy-z.png',
            'brand_device_id' => 3,
        ]);
        Family::create([
            'name' => 'Huawei P_Smart_Mate',
            'image' => 'galaxy-z.png',
            'brand_device_id' => 3,
        ]);

        //Modèles de marques
        // ModelBrand::create([
        //     'name' => 'U12 PLUS',
        //     'image' => 'U12PLUS.png',
        //     'brand_device_id' => 1,
        // ]);

        // Modèles Iphone
        ModelBrand::create([
            'name' => 'iPhone SE (2016)',
            'image' => 'iphone-se-2016.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone SE (2020)',
            'image' => 'iphone-se-2020.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone SE (2022)',
            'image' => 'iphone-se-2022.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 6S',
            'image' => 'iphone-6s.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 6S Plus',
            'image' => 'iphone-6s-plus.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 7',
            'image' => 'iphone-7.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 7 Plus',
            'image' => 'iphone-7-plus.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 8',
            'image' => 'iphone-8.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 8 Plus',
            'image' => 'iphone-8-plus.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone X',
            'image' => 'iphone-x.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone XS Max',
            'image' => 'iphone-xs-max.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone XS',
            'image' => 'iphone-xs.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone XR',
            'image' => 'iphone-xr.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 11',
            'image' => 'iphone-11.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 11 Pro',
            'image' => 'iphone-11-pro.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 11 Pro Max',
            'image' => 'iphone-11-pro-max.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 12',
            'image' => 'iphone-12.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 12 Pro',
            'image' => 'iphone-12-pro.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 12 Pro Max',
            'image' => 'iphone-12-pro-max.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 12 Pro mini',
            'image' => 'iphone-12-pro-mini.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 13',
            'image' => 'iphone-13.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 13 mini',
            'image' => 'iphone-13-mini.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 13 Pro',
            'image' => 'iphone-13-pro.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 13 Pro Max',
            'image' => 'iphone-13-pro-max.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 14',
            'image' => 'iphone-14.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 14 Plus',
            'image' => 'iphone-14-plus.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 14 Pro',
            'image' => 'iphone-14-pro.png',
            'brand_device_id' => 2,
        ]);

        ModelBrand::create([
            'name' => 'iPhone 14 Pro Max',
            'image' => 'iphone-14-pro-max.png',
            'brand_device_id' => 2,
        ]);


        // Capacité de stockage
        StepSelling::create([
            'name' => 'Capacité de stockage',
            'title' => 'Quel est la capacité de stockage de votre appareil ?',
        ]);
        QuestionStepSelling::insert([
            ['title' => '16 Go'],
            ['title' => '32 Go'],
            ['title' => '64 Go'],
            ['title' => '256 Go'],
            ['title' => '512 Go'],
            ['title' => '1 Go'],
        ]);


        MergeQuestionStepSelling::create([
            'step_selling_id' => 1,
            'question_step_selling_id' => 1,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 1,
            'question_step_selling_id' => 2,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 1,
            'question_step_selling_id' => 3,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 1,
            'question_step_selling_id' => 4,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 1,
            'question_step_selling_id' => 5,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 1,
            'question_step_selling_id' => 6,
        ]);

        //Déblocage opérateur
        StepSelling::create([
            'name' => 'Déblocage opérateur',
            'title' => 'Votre produit est t-il débloqué de tout opérateur ?',
        ]);
        QuestionStepSelling::insert([
            ['title' => 'OUI'],
            ['title' => 'NON'],
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 2,
            'question_step_selling_id' => 7,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 2,
            'question_step_selling_id' => 8,
        ]);


        //Etat de l'ecran
        StepSelling::create([
            'name' => 'Etat de l\'ecran',
            'title' => 'Quel est l\'etat de l\'ecran de votre appareil ?',
        ]);
        QuestionStepSelling::insert([
            [
                'title' => 'Parfait etat',
                'description' => 'L\'écran est en parfait état, sans rayures ni traces d\'usure visible.
                L\'écran est fonctionnel et ne présente aucun pixel défectueux. ( ex:écran fantôme, écran brûlé, pixel mort, etc.). Le tactile est opérationnel.',
            ],
            [
                'title' => 'Très bon etat',
                'description' => 'Peut présenter des micro-rayure à peine visible (invisible à 20cm), sans fissure et/ou impact. L\'écran est fonctionnel et ne présente aucun pixel défectueux ( ex:écran fantôme, écran brûlé, pixel mort, etc.). Le tactile est opérationnel.',
            ],
            [
                'title' => 'Etat correct',
                'description' => 'Peut présenter des traces d\'usure visible, des rayons profondes et/ou petits impacts.
                L\'écran est fonctionnel et ne présente aucun pixel défectueux ( ex:écran fantôme, écran brûlé, pixel mort, etc.). Le tactile est opérationnel.',
            ],
            [
                'title' => 'Cassé',
                'description' => 'Peut présenter au moins une fissure ou est visiblement cassé.L\'écran peut ne pas etre fonctionnel
                et peut présenter des pixels défectueux ( ex:écran fantôme, écran brûlé, pixel mort, etc.) et des problème de tactile.',
            ],
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 3,
            'question_step_selling_id' => 9,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 3,
            'question_step_selling_id' => 10,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 3,
            'question_step_selling_id' => 11,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 3,
            'question_step_selling_id' => 12,
        ]);


        //Etat coque
        StepSelling::create([
            'name' => 'Etat coque',
            'title' => 'Quel est l\'etat de la coque et du contour ?',
        ]);
        QuestionStepSelling::insert([
            [
                'title' => 'Parfait etat',
                'description' => 'Parfait état, aucune rayure visible',
            ],
            [
                'title' => 'Très bon etat',
                'description' => 'Peut présenter des micro-rayure à peine visible (invisible à 20cm), sans fissure et/ou impact.',
            ],
            [
                'title' => 'Etat correct',
                'description' => 'Peut présenter des traces d\'usure visible, des rayons profondes et/ou petits impacts.'
            ],
            [
                'title' => 'Cassé',
                'description' => 'Peut présenter au moins une fissure ou est visiblement cassé.',
            ],
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 4,
            'question_step_selling_id' => 13,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 4,
            'question_step_selling_id' => 14,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 4,
            'question_step_selling_id' => 15,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 4,
            'question_step_selling_id' => 16,
        ]);



        //Etat de l'appareil
        StepSelling::create([
            'name' => 'Etat de l\'appareil',
            'title' => 'Votre appareil est-il fonctionnel ?',
        ]);

        QuestionStepSelling::insert([
            ['title' => 'Oui'],
            ['title' => 'Non'],
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 5,
            'question_step_selling_id' => 17,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 5,
            'question_step_selling_id' => 18,
        ]);

        //Date de sortie
        /*StepSelling::create([
            'name' => 'Date de sortie',
            'title' => 'Quel est la date de sortie de votre appareil ?',
        ]);
        QuestionStepSelling::insert([
            ['title' => 'Fin 2012'],
            ['title' => 'Mi 2013'],
            ['title' => 'Mi 2014'],
            ['title' => 'Début 2015']
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 1,
            'question_step_selling_id' => 1,
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 1,
            'question_step_selling_id' => 2,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 1,
            'question_step_selling_id' => 3,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 1,
            'question_step_selling_id' => 4,
        ]);

        //Taille d'écran
        StepSelling::create([
            'name' => 'Taille d\'ecran',
            'title' => 'Quel est la taille de votre écran ?',
        ]);
        QuestionStepSelling::insert([
            ['title' => '11 pouces'],
            ['title' => '13 pouce'],
            ['title' => '15 pouces']
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 2,
            'question_step_selling_id' => 5,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 2,
            'question_step_selling_id' => 6,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 2,
            'question_step_selling_id' => 7,
        ]);

        //Processeur
        StepSelling::create([
            'name' => 'Processeur',
            'title' => 'Quel est le processeur de votre appareil ?',
        ]);
        QuestionStepSelling::insert([
            ['title' => 'Intel Core i5'],
            ['title' => 'Intel Core i7'],
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 3,
            'question_step_selling_id' => 8,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 3,
            'question_step_selling_id' => 9,
        ]);

        //Mémoire
        StepSelling::create([
            'name' => 'Mémoire',
            'title' => 'Quel est la mémoire de votre appareil ?',
        ]);
        QuestionStepSelling::insert([
            ['title' => '4 Go'],
            ['title' => '8 Go'],
            ['title' => '16 Go'],
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 4,
            'question_step_selling_id' => 10,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 4,
            'question_step_selling_id' => 11,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 4,
            'question_step_selling_id' => 12,
        ]);

        //Carte graphique
        StepSelling::create([
            'name' => 'Carte graphique',
            'title' => 'Quelle est la carte graphique de votre appareil ?',
        ]);
        QuestionStepSelling::insert([
            ['title' => 'Intel Iris Graphics 6100'],
            ['title' => 'Intel Iris Graphics 5100'],
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 6,
            'question_step_selling_id' => 17,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 6,
            'question_step_selling_id' => 18,
        ]);

        StepSelling::create([
            'name' => 'Etate de la batterie',
            'title' => 'Dans quel etat est la battérie de votre appareil ?',
        ]);
        QuestionStepSelling::insert([
            ['title' => 'Normal', 'description' => 'La batterie fonctionne normalement'],
            ['title' => 'Réparation recommandée', 'description' => 'La batterie doit être réparée'],
        ]);


        MergeQuestionStepSelling::create([
            'step_selling_id' => 7,
            'question_step_selling_id' => 19,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 7,
            'question_step_selling_id' => 20,
        ]);*/


        //Association de pannes d'appareil aux modèles de marques

        // $j = 0;
        // $k = 0;

        // for($k = 1; $k <= 102; $k++){

        //     for($j = 1; $j <= 3; $j++) {
        //         MergeModelFailure::create([
        //             'model_brand_id' => $k,
        //             'failure_device_id' => $j,
        //         ]);
        //     }
        // }

        // Boutiques
        StoreDevice::create([
            'name' => 'Centre commercial Cap 3000',
            'address' => 'Avenue Eugène Donadeï, 06700 Saint-Laurent-du-Var',
            'city' => 'France',
            'zip_code' => '06260',
        ]);
        StoreDevice::create([
            'name' => 'Mayday Phone - Fnac Nice',
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
