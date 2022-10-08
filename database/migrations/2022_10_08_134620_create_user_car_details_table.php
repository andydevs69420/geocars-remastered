<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("user_car_details", function (Blueprint $table) {
            $table->id("user_car_details_id");
            $table->foreignId("user_id_fk")->constrained("user", "user_id");
            $table->foreignId("car_id_fk")->constrained("car", "car_id");
            $table->string("car_color");
            $table->string("car_plate_number");
            $table->foreignId("car_status_id_fk")->constrained("car_status", "car_status_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("user_car_details");
    }
};
