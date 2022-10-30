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
        Schema::create('circle_images', function (Blueprint $table) {
            $table->id();
            $table->integer('circle_id');
            $table->string('hero_img'); //ヒーロー画像
            $table->string('img1'); //画像1
            $table->string('img2'); //画像2
            $table->string('img3')->nullable(true); //画像3
            $table->string('img4')->nullable(true); //画像4
            $table->string('img5')->nullable(true); //画像5
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
        Schema::dropIfExists('circle_images');
    }
};