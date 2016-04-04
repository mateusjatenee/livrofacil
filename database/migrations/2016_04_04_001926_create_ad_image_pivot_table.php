<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdImagePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_image', function (Blueprint $table) {
            $table->integer('ad_id')->unsigned()->index();
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
            $table->integer('image_id')->unsigned()->index();
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->primary(['ad_id', 'image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ad_image');
    }
}
