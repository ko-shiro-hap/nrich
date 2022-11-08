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
        Schema::create('circle_details', function (Blueprint $table) {
            $table->id();
            $table->integer('circle_id');
            $table->string('catch_copy'); //キャッチコピー
            $table->text('summary'); //概要
            $table->integer('number_of_men'); //男子メンバー人数
            $table->integer('number_of_women'); //女子メンバー人数
            $table->string('location', 64); //活動場所
            $table->string('activity_frequency'); //活動日数
            $table->integer('membership_fee'); //入会費
            $table->integer('admission_fee'); //会費
            $table->string('initial_cost'); //初期費用
            $table->integer('number_of_camps'); //合宿回数
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
        Schema::dropIfExists('circle_details');
    }
};