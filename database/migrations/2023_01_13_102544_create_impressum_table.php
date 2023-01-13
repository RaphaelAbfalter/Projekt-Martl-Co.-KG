<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpressumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impressum', function (Blueprint $table) {
            $table->increments("id");
            $table->string("firmenanschrift");
            $table->id("unternehmensgegenstand");
            $table->string("UIDNummer");
            $table->string("GLN");
            $table->string("GISA");
            $table->string("telefonnummer");
            $table->string("fax");
            $table->string("email");
            $table->id("adresse");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('impressum');
    }
}
