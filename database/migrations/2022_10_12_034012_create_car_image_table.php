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
        Schema::create("car_image", function (Blueprint $table) {
            $table->id("car_image_id");
            $table->foreignId("user_company_car_details_id_fk")->constrained("user_company_car_details", "user_company_car_details_id");
            $table->string("car_image_link");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("car_images");
    }
};
