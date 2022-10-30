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
        Schema::create('circle_atmospheres', function (Blueprint $table) {
            $table->id();
            $table->integer('circle_id');
            $table->integer('seriousness'); //真剣さ
            $table->integer('hyponymy'); //上下関係
            $table->integer('more_position');//兼サーのしやすさ
            $table->integer('intimacy');//仲の良さ
            $table->integer('dinner_meeting');//食事会の頻度
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
        Schema::dropIfExists('circle_atmospheres');
    }
};