<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImageArticles extends Migration
{
    public function up()
    {
        Schema::create('image_articles', function (Blueprint $table) {
            $table->id('id_image');
            $table->string('nom_image');
            $table->string('id');
            $table->foreign('id')->references('id')->on('articles')->onDelete('cascade');
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
        //
    }
}
