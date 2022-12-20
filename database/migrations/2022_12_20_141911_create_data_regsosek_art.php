<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRegsosekArt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_regsosek_art', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->datetime('R014')->nullable();
            $table->string('R021')->nullable();
            $table->string('R022')->nullable();
            $table->string('R023')->nullable();
            $table->string('R024')->nullable();
            $table->string('R011')->nullable();
            $table->string('R700')->nullable();
            $table->string('R701')->nullable();
            $table->string('R711')->nullable();
            $table->string('R712')->nullable();
            $table->integer('R713')->nullable();
            $table->integer('R714a')->nullable();
            $table->integer('R714b')->nullable();
            $table->integer('R714c')->nullable();
            $table->integer('R715a')->nullable();
            $table->integer('R715b')->nullable();
            $table->integer('R715c')->nullable();
            $table->integer('R716a')->nullable();
            $table->integer('R716b')->nullable();
            $table->integer('R716c')->nullable();
            $table->integer('R723')->nullable();
            $table->integer('R724')->nullable();
            $table->integer('R725')->nullable();
            $table->integer('R726a')->nullable();
            $table->integer('R726b')->nullable();
            $table->integer('R726c')->nullable();
            $table->integer('R726d')->nullable();
            $table->integer('R728')->nullable();
            $table->integer('R728a')->nullable();
            $table->integer('R728b')->nullable();
            $table->integer('R728c')->nullable();
            $table->integer('R729')->nullable();
            $table->integer('R730')->nullable();
            $table->integer('R731')->nullable();
            $table->integer('R732')->nullable();
            $table->integer('R733a')->nullable();
            $table->integer('R733b')->nullable();
            $table->integer('R733c')->nullable();
            $table->integer('R733d')->nullable();
            $table->integer('R733e')->nullable();
            $table->integer('R733f')->nullable();
            $table->integer('R733g')->nullable();
            $table->integer('R733h')->nullable();
            $table->integer('R734')->nullable();
            $table->integer('R735')->nullable();
            $table->integer('R736')->nullable();
            $table->integer('R737')->nullable();
            $table->integer('R738')->nullable();
            $table->integer('R739')->nullable();
            $table->integer('R740')->nullable();
            $table->integer('R741')->nullable();
            $table->integer('R742')->nullable();
            $table->integer('R743')->nullable();
            $table->integer('R744')->nullable();
            $table->integer('R745a')->nullable();
            $table->integer('R745b')->nullable();
            $table->integer('R745c')->nullable();
            $table->integer('R745e')->nullable();
            $table->integer('R745f')->nullable();
            $table->integer('R760a')->nullable();
            $table->integer('R760b')->nullable();
            $table->integer('R765a')->nullable();
            $table->integer('R765b')->nullable();
            $table->integer('R765c')->nullable();
            $table->integer('R770a')->nullable();
            $table->integer('R770b')->nullable();
            $table->integer('R770c')->nullable();
            $table->integer('R770d')->nullable();
            $table->integer('R770e')->nullable();
            $table->integer('R770f')->nullable();
            $table->integer('R800')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_regsosek_art');
    }
}
