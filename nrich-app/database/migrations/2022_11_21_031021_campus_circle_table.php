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
        Schema::create('campus_circle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('circle_id');//サークルID
            $table->unsignedBigInteger('campus_id');//カテゴリー ID

            //外部キー
            $table->foreign('circle_id')->references('id')->on('circles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('campus_id')->references('id')->on('campuses')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campus_circle');
    }
};