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
        Schema::create("plan", function (Blueprint $table) {
            $table->id("plan_id");
            $table->string("plan_name")->unique();
            $table->double("plan_cost");
            $table->integer("plan_number_of_vehicles");
            $table->integer("plan_access_hours");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("plan");
    }
};
