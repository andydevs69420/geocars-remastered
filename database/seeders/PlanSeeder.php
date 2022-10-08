<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $PLAN = [
            [
                "plan_name" => "freemium",
                "plan_cost" => 0.0,
                "plan_number_of_vehicles" => 6,
                "plan_access_hours" => 12
            ],
            [
                "plan_name" => "pro",
                "plan_cost" => 1600,
                "plan_number_of_vehicles" => 12,
                "plan_access_hours" => 6
            ],
            [
                "plan_name" => "business",
                "plan_cost" => 2000,
                "plan_number_of_vehicles" => 12,
                "plan_access_hours" => 24
            ]
        ];

        foreach($PLAN as $plan) {
            \App\Models\Plan::create($plan);
        }
    }
}
