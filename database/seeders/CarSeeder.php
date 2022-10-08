<?php

namespace Database\Seeders;

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
        //
        $CARS = [
            [ "car_brand" => "Toyota", "car_model" => "Vios"],
            [ "car_brand" => "Ford", "car_model" => "Mustang"],
            [ "car_brand" => "Hyundai", "car_model" => "accent"]
        ];
        foreach($CARS as $car)
        {
            \App\Models\Car::create($car);
        }
    }
}
