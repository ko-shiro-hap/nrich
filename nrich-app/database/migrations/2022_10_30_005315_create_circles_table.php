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
        Schema::create('circles', function (Blueprint $table) {
            $table->id(); //サークルID
            $table->integer('university_id'); //大学ID
            $table->string('name', 32); //サークル名
            $table->string('catchphrase', 32); //キャッチフレーズ
            $table->text('summary'); //概要
            $table->integer('number_of_men'); //男子メンバー人数
            $table->integer('number_of_women'); //女子メンバー人数
            $table->string('location', 64); //活動場所
            $table->string('frequency', 64); //活動日数
            $table->string('membership_fee', 64); //入会費
            $table->string('admission_fee', 64); //会費
            $table->string('initial_cost', 64); //初期費用
            $table->string('number_of_camps', 64); //合宿回数
            $table->integer('seriousness'); //真剣さ
            $table->integer('relationship'); //仲間
            $table->integer('experience');//経験
            $table->integer('freedom');//活動の自由度
            $table->string('hero_image'); //ヒーロー画像
            $table->string('image1'); //画像1
            $table->string('image2'); //画像2
            $table->string('image3')->nullable(true); //画像3
            $table->string('image4')->nullable(true); //画像4
            $table->string('image5')->nullable(true); //画像5
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
        Schema::dropIfExists('circles');
    }
};
