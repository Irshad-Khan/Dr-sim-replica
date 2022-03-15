<?php

namespace Database\Seeders;

use App\Models\MobileModel;
use Illuminate\Database\Seeder;

class MobileModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MobileModel::create([
            'name' => 'Nokia 2020',
            'brand_id' => 1,
            'image' => 'nokia.jpg'
        ]);

        MobileModel::create([
            'name' => 'Iphone 12',
            'brand_id' => 2,
            'image' => 'iphone12.jpg'
        ]);

        MobileModel::create([
            'name' => 'OPPO A53',
            'brand_id' => 3,
            'image' => 'oppo.jpg'
        ]);

        MobileModel::create([
            'name' => 'VIVO Y20g',
            'brand_id' => 4,
            'image' => 'vivo.jpg'
        ]);
    }
}
