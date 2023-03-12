<?php

use App\Models\Ue;
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
        Schema::create('ecus', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->integer('masse_horaire_total');
            $table->integer('masse_horaire_ecoule');
            $table->string('nom_enseignant',100);
            $table->foreignIdFor(Ue::class);
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
        Schema::dropIfExists('ecus');
    }
};
