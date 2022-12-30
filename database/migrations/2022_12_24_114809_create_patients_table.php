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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('age')->nullable();
            $table->string('sexe')->nullable();
            $table->float('temperature')->nullable();
            $table->float('taille')->nullable();
            $table->string('rhesus')->nullable();
            $table->string('group-sanguin')->nullable();
            $table->string('locality', 30)->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
