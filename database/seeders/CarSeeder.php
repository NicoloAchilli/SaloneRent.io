<?php

namespace Database\Seeders;

use App\Models\Resources\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                'plate' => 'AP 657 ER',
                'brand' => 'Renault',
                'model' => 'Twingo',
                'number_of_seats' => '5',
                'number_of_doors' => '3',
                'transmission' => 'manual',
                'fuel' => 'diesel',
                'price' => '34.50',
                'image_path' => null,
            ],

            [
                'plate' => 'AP 045 ER',
                'brand'=> 'Mercedes',
                'model'=> 'Benz',
                'number_of_seats'=> '5',
                'number_of_doors'=> '5',
                'transmission'=> 'automatic',
                'fuel'=> 'hybrid',
                'price' => '54.60',
                'image_path'=> null,
            ]

        ];

        foreach ($cars as $car){
            Car::create($car);
        }
    }
}
