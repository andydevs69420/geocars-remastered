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
        Schema::create("user_company_plan_details", function (Blueprint $table) {
            $table->id("user_company_plan_details_id");
            $table->foreignId("user_plan_details_id_fk")->constrained("user_plan_details", "user_plan_details_id");
            $table->foreignId("company_id_fk")->constrained("company", "company_id");
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
        Schema::dropIfExists("user_company_details");
    }
};
