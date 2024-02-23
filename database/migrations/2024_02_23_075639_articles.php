<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articles extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nom');
            $table->text('description');
            $table->integer('nombre_etoiles');
            $table->bigInteger('id_categorie');
            $table->foreign('id_categorie')->references('id_categorie')->on('article_categories')->onDelete('cascade');
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
