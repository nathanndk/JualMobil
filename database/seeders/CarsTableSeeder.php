<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        $cars = [
            [
                'user_id' => 1,
                'brand' => 'Lamborghini',
                'model' => 'Aventador SVJ',
                'year' => 2023,
                'price' => 5000000000,
                'description' => 'The ultimate Lamborghini with unparalleled performance.',
                'photo' => 'aventador_svj.jpg',
            ],
            [
                'user_id' => 1,
                'brand' => 'Ferrari',
                'model' => 'SF90 Stradale',
                'year' => 2022,
                'price' => 4500000000,
                'description' => 'Ferrari\'s first plug-in hybrid with mind-blowing speed.',
                'photo' => 'sf90_stradale.jpg',
            ],
            // Tambahkan mobil-mobil lainnya di sini sesuai kebutuhan
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
