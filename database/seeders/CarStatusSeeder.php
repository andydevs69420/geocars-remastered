<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $STATUS = ["Vacant", "Occupied"];

        foreach($STATUS as $status)
        {
            \App\Models\CarStatus::create([
                "car_status_name" => $status
            ]);
        }
    }
}
