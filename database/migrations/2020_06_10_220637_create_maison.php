<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaison extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maison', function (Blueprint $table) {
            $table->id();
            $table->text("nom");
            $table->text("type_bien");
            $table->integer("surface");
            $table->text("descriptions");
            $table->text("critere");
            $table->mediumText("images");
            $table->text("logement");
            $table->integer("piece");
            $table->text("commune");
            $table->integer("prix");
            $table->text("lien");
            $table->integer("is_delete");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maison');
    }
}
