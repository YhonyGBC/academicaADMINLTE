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
        Schema::create('decanos', function (Blueprint $table) {
            $table->char('codDecano', 2);
            $table->char('nomDecano', 40);
            $table->char('facultad', 2);
            $table->timestamps();
            $table->primary('codDecano');
            $table->foreign('facultad')->references('codFacultad')->on('facultades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('decanos');
    }
};
