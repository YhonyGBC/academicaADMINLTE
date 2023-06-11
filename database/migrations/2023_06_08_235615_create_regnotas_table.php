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
        Schema::create('regnotas', function (Blueprint $table) {
            $table->char('estudiante', 4);
            $table->char('materia', 2);
            $table->char('profesor', 2);
            $table->float('parcial1');
            $table->float('parcial2');
            $table->float('efinal');
            $table->float('nfinal');
            $table->char('estado', 1);
            $table->timestamps();
            $table->unique('estudiante');
            $table->unique('materia');
            $table->unique('profesor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regnotas');
    }
};
