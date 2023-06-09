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
        TypeDevice::create([
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
        ]);

        //Marques d'appareils
        BrandDevice::create([
            'name' => 'SAMSUNG',
            'image' => 'samsung.webp',
            'type_device_id' => 1
        ]);
        BrandDevice::create([
            'name' => 'APPLE',
            'image' => 'apple.webp',
            'type_device_id' => 2
        ]);
        BrandDevice::create([
            'name' => 'NINTENDO',
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

        // L'honnêteté est la meilleure stratégie
        // Tous les appareils vendus via nos services sont vérifiés par des experts du reconditionné afin de s'assurer qu'ils sont conformes à leur évaluation.

        //Date de sortie
        StepSelling::create([
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


        //Capacité de stockage
        StepSelling::create([
            'name' => 'Capacité de stockage',
            'title' => 'Quel est la capacité de stockage de votre appareil ?',
        ]);
        QuestionStepSelling::insert([
            ['title' => '128 Go'],
            ['title' => '256 Go'],
            ['title' => '512 Go'],
            ['title' => '1 To'],
        ]);



        MergeQuestionStepSelling::create([
            'step_selling_id' => 5,
            'question_step_selling_id' => 13,
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 5,
            'question_step_selling_id' => 14,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 5,
            'question_step_selling_id' => 15,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 5,
            'question_step_selling_id' => 16,
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
        ]);


        //Etat de l'ecran
        StepSelling::create([
            'name' => 'Etat de l\'ecran',
            'title' => 'Quel est l\'etat de l\'ecran de votre appareil ?',
        ]);
        QuestionStepSelling::insert([
            [
                'title' => 'Parfait etat',
                'description' => 'L\'écran est en parfait état, sans rayures ni traces d\'usure.',
            ],
            [
                'title' => 'Très bon etat',
                'description' => 'L\'écran est en très bon état, sans rayures ni traces d\'usure.',
            ],
            [
                'title' => 'Mauvais etat',
                'description' => 'L\'écran est en mauvais état, avec des rayures et des traces d\'usure.',
            ],
            [
                'title' => 'Etat correct',
                'description' => 'L\'écran est en état correct, avec des rayures et des traces d\'usure.',
            ],
            [
                'title' => 'Cassé',
                'description' => 'L\'écran est cassé, fissuré ou brisé.',
            ],
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 8,
            'question_step_selling_id' => 21,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 8,
            'question_step_selling_id' => 22,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 8,
            'question_step_selling_id' => 23,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 8,
            'question_step_selling_id' => 24,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 8,
            'question_step_selling_id' => 25,
        ]);


        //Etat coque
        StepSelling::create([
            'name' => 'Etat coque',
            'title' => 'Quel est l\'etat de la coque et du contour ?',
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 9,
            'question_step_selling_id' => 21,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 9,
            'question_step_selling_id' => 22,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 9,
            'question_step_selling_id' => 23,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 9,
            'question_step_selling_id' => 24,
        ]);
        MergeQuestionStepSelling::create([
            'step_selling_id' => 9,
            'question_step_selling_id' => 25,
        ]);


        //Etat du clavier
        StepSelling::create([
            'name' => 'Etat de l\'appareil',
            'title' => 'Votre appareil est-il fonctionnel ?',
        ]);

        QuestionStepSelling::insert([
            ['title' => 'Oui'],
            ['title' => 'Non'],
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 10,
            'question_step_selling_id' => 26,
        ]);

        MergeQuestionStepSelling::create([
            'step_selling_id' => 10,
            'question_step_selling_id' => 27,
        ]);


        MergeModelStepSelling::insert([
            [
                'model_brand_id' => 1,
                'step_selling_id' => 1,
                'order' => 1,
            ],
            [
                'model_brand_id' => 1,
                'step_selling_id' => 2,
                'order' => 2
            ],
            [
                'model_brand_id' => 1,
                'step_selling_id' => 4,
                'order' => 3
            ],
            [
                'model_brand_id' => 1,
                'step_selling_id' => 7,
                'order' => 4
            ],
            [
                'model_brand_id' => 1,
                'step_selling_id' => 8,
                'order' => 5
            ],
            [
                'model_brand_id' => 1,
                'step_selling_id' => 9,
                'order' => 6
            ],
        ]);

        MergeModelStepSelling::insert([
            [
                'model_brand_id' => 3,
                'step_selling_id' => 3,
                'order' => 1
            ],
            [
                'model_brand_id' => 3,
                'step_selling_id' => 6,
                'order' => 2
            ],
            [
                'model_brand_id' => 3,
                'step_selling_id' => 10,
                'order' => 3
            ],
        ]);

        MergeModelStepSelling::insert([
            [
                'model_brand_id' => 2,
                'step_selling_id' => 1,
                'order' => 1
            ],
            [
                'model_brand_id' => 2,
                'step_selling_id' => 2,
                'order' => 2
            ],
            [
                'model_brand_id' => 2,
                'step_selling_id' => 5,
                'order' => 3
            ],
            [
                'model_brand_id' => 2,
                'step_selling_id' => 7,
                'order' => 4
            ],
            [
                'model_brand_id' => 2,
                'step_selling_id' => 8,
                'order' => 5
            ],
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
