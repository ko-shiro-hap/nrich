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
        Schema::create('circle_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('circle_id');//サークルID
            $table->unsignedBigInteger('category_id');//カテゴリー ID

            //外部キー
            $table->foreign('circle_id')->references('id')->on('circles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('circle_category');

    }
};