<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eleve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleve',function(Blueprint $table){
            $table->increments('id');
            $table->string('matricule')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->date('dateN')->nullable();
            $table->string('lieuN')->nullable();
            $table->enum('genre',['masculin','feminin'])->nullable();
            $table->integer('cniparent')->nullable();
            $table->string('classe')->nullable();
            $table->string('sante')->nullable();
            $table->string('nationalite')->nullable();

            $table->rememberToken();
            $table->timestamps();

        });
        //
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
