<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMDesaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_desa', function (Blueprint $table) {
            $table->id();
            $table->string('id_prov');
            $table->string('id_kab');
            $table->string('id_kec');
            $table->string('id_desa');
            $table->string('nama_desa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_desa');
    }
}
