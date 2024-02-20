<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'user_id' => 1,
                'brand' => 'Lamborghini',
                'model' => 'Aventador SVJ',
                'year' => 2023,
                'price' => 50000000,
                'description' => 'The ultimate Lamborghini with unparalleled performance.',
                'photo' => 'aventador_svj.jpg',
            ],
            [
                'user_id' => 1,
                'brand' => 'Ferrari',
                'model' => 'SF90 Stradale',
                'year' => 2022,
                'price' => 45000000,
                'description' => 'Ferrari\'s first plug-in hybrid with mind-blowing speed.',
                'photo' => 'sf90_stradale.jpg',
            ],
            [
                'user_id' => 1,
                'brand' => 'Porsche',
                'model' => '911 GT3',
                'year' => 2022,
                'price' => 25000000,
                'description' => 'The ultimate Porsche 911 with a naturally aspirated engine.',
                'photo' => '911_gt3.jpg',
            ],
            [
                'user_id' => 1,
                'brand' => 'McLaren',
                'model' => '720S',
                'year' => 2022,
                'price' => 30000000,
                'description' => 'The McLaren 720S is a supercar with a twin-turbo V8 engine.',
                'photo' => '720s.jpg',
            ],
            [
                'user_id' => 1,
                'brand' => 'Aston Martin',
                'model' => 'Valkyrie',
                'year' => 2023,
                'price' => 60000000,
                'description' => 'The ultimate Aston Martin with a Formula 1 engine.',
                'photo' => 'valkyrie.jpg',
            ],
        ]);
    }
}
