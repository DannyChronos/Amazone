<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admins extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->string('id_admin')->primary();
            $table->string('nom_complet');
            $table->string('password');
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
