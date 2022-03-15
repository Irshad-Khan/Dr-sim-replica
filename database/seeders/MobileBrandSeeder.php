<?php

namespace Database\Seeders;

use App\Models\MobileBrand;
use Illuminate\Database\Seeder;

class MobileBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MobileBrand::create([
            'title' => 'Nokia',
            'image' => 'nokia.jpg'
        ]);

        MobileBrand::create([
            'title' => 'Apple',
            'image' => 'iphone.jpeg'
        ]);

        MobileBrand::create([
            'title' => 'OPPO',
            'image' => 'oppo.jpeg'
        ]);

        MobileBrand::create([
            'title' => 'VIVO',
            'image' => 'vivo.jpg'
        ]);
    }
}
