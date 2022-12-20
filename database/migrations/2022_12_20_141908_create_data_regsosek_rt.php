<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRegsosekRt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_regsosek_rt', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('R011')->nullable();
            $table->string('R700')->nullable();
            $table->string('R014')->nullable();
            $table->string('R021')->nullable();
            $table->string('R022')->nullable();
            $table->string('R023')->nullable();
            $table->string('R024')->nullable();
            $table->string('R030')->nullable();
            $table->string('R031')->nullable();
            $table->string('R032')->nullable();
            $table->string('R033')->nullable();
            $table->string('R034')->nullable();
            $table->string('R034a')->nullable();
            $table->string('R035')->nullable();
            $table->string('R035a')->nullable();
            $table->string('R036')->nullable();
            $table->string('R036a')->nullable();
            $table->string('R037')->nullable();
            $table->string('R038')->nullable();
            $table->integer('R111a')->nullable();
            $table->integer('R111b')->nullable();
            $table->integer('R111c')->nullable();
            $table->integer('R111d')->nullable();
            $table->integer('R111e')->nullable();
            $table->integer('R111f')->nullable();
            $table->integer('R111g')->nullable();
            $table->integer('R111h')->nullable();
            $table->integer('R111i')->nullable();
            $table->integer('R111j')->nullable();
            $table->integer('R111k')->nullable();
            $table->integer('R111l')->nullable();
            $table->integer('R111m')->nullable();
            $table->integer('R111n')->nullable();
            $table->integer('R111o')->nullable();
            $table->integer('R111p')->nullable();
            $table->integer('R130a')->nullable();
            $table->integer('R130b')->nullable();
            $table->integer('R132')->nullable();
            $table->integer('R133a')->nullable();
            $table->integer('R133b')->nullable();
            $table->integer('R133c')->nullable();
            $table->integer('R133d')->nullable();
            $table->integer('R133e')->nullable();
            $table->integer('R133h')->nullable();
            $table->integer('R151')->nullable();
            $table->integer('R152')->nullable();
            $table->integer('R211')->nullable();
            $table->integer('R212')->nullable();
            $table->integer('R213')->nullable();
            $table->integer('R214')->nullable();
            $table->integer('R215')->nullable();
            $table->integer('R216')->nullable();
            $table->integer('R217')->nullable();
            $table->integer('R218')->nullable();
            $table->integer('R219')->nullable();
            $table->integer('R220')->nullable();
            $table->integer('R221')->nullable();
            $table->integer('R222')->nullable();
            $table->integer('R223')->nullable();
            $table->string('R224')->nullable();
            $table->integer('R225')->nullable();
            $table->integer('R226')->nullable();
            $table->integer('R227')->nullable();
            $table->integer('R228')->nullable();
            $table->integer('R311')->nullable();
            $table->integer('R312')->nullable();
            $table->integer('R314')->nullable();
            $table->integer('R315')->nullable();
            $table->integer('R317')->nullable();
            $table->integer('R318')->nullable();
            $table->integer('R319')->nullable();
            $table->integer('R320')->nullable();
            $table->integer('R414')->nullable();
            $table->integer('R415')->nullable();
            $table->integer('R416')->nullable();
            $table->integer('R417')->nullable();
            $table->integer('R418')->nullable();
            $table->string('R419')->nullable();
            $table->integer('exp_yhat')->nullable();
            $table->integer('percentil_desa')->nullable();
            $table->integer('desil_desa')->nullable();
            $table->integer('kuintil_desa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_regsosek_rt');
    }
}
