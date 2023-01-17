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
            $table->bigIncrements("id");
            $table->string("firmenanschrift");
            $table->string("unternehmensgegenstand");
            $table->string("UIDNummer");
            $table->string("GLN");
            $table->string("GISA");
            $table->string("telefonnummer");
            $table->string("fax");
            $table->string("email");
            $table->string("adresse");
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
        Schema::dropIfExists('impressum');
    }
}
