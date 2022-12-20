<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShapleyKabTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shapley_kab', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('id_prov')->nullable();
            $table->string('id_kab')->nullable();
            $table->string('plot')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shapley_kab');
    }
}
