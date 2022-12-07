<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriveplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driveplan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Adresse');
            $table->string('AdressenTyp');
            $table->string('AnreiseAuto');
            $table->string('AnreiseÖffi');
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
        Schema::dropIfExists('driveplan');
    }
}
