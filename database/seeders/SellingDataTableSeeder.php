<?php

namespace Database\Seeders;

use App\Models\Selling\MergeModelStepSelling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellingDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 102; $i++) {
            MergeModelStepSelling::insert([
                [
                    'model_brand_id' => $i,
                    'step_selling_id' => 1,
                    'order' => 1,
                ],
                [
                    'model_brand_id' => $i,
                    'step_selling_id' => 2,
                    'order' => 2
                ],
                [
                    'model_brand_id' => $i,
                    'step_selling_id' => 3,
                    'order' => 3
                ],
                [
                    'model_brand_id' => $i,
                    'step_selling_id' => 4,
                    'order' => 4
                ],
                [
                    'model_brand_id' => $i,
                    'step_selling_id' => 5,
                    'order' => 5
                ],
            ]);
        }

    }
}
