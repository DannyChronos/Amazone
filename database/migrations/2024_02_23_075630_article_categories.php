<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArticleCategories extends Migration
{
    public function up()
    {
        Schema::create('article_categories', function (Blueprint $table) {
            $table->bigInteger('id_categorie');
            $table->string('nom_categorie');
            $table->primary('id_categorie');
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
