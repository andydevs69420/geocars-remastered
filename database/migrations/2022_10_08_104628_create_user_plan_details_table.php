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
        Schema::create("user_plan_details", function (Blueprint $table) {
            $table->id("user_plan_details_id");
            $table->foreignId("user_id_fk")->constrained("user", "user_id");
            $table->foreignId("plan_id_fk")->constrained("plan", "plan_id");
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
        Schema::dropIfExists("user_plan_details");
    }
};
