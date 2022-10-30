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
            $table->text('summary');
            $table->integer('number_of_men');
            $table->integer('number_of_women');
            $table->string('location', 64);
            $table->string('activity_frequency');
            $table->integer('number_of_camps');
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
