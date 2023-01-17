<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnfahrtsplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anfahrtsplan', function (Blueprint $table) {
            $table->id();
            $table->text('addressOffice');
            $table->text('driveToOffice');
            $table->text('publicTransportToOffice');
            $table->text('addressWorkshop');
            $table->text('driveToWorkshop');
            $table->text('publicTransportToWorkshop');
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
        Schema::dropIfExists('anfahrtsplan');
    }
}
