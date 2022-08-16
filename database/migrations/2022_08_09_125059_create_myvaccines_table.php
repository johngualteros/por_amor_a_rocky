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

        Schema::create('vaccines', function (Blueprint $table) {
            $table->id();
            $table->text('nombreVacuna',45);
            $table->timestamps();
        });

        Schema::create('myvaccines', function (Blueprint $table) {
            $table->id();
            $table->date('fechaVacuna');
            $table->foreignId('vaccines_id')->constrained(); 
            $table->foreignId('pets_id')->constrained(); 
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
        Schema::dropIfExists('vaccines');

        Schema::dropIfExists('myvaccines');
    }
};
