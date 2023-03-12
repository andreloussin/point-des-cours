<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pogramme', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->integer('nombre_ue');
            $table->integer('nombre_ecu');
            $table->string('filiere', 100);
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
        Schema::dropIfExists('pogramme');
    }
};
