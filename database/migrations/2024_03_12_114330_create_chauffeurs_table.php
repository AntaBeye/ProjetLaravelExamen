<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->id();
    $table->string('nom');
    $table->string('prenom');
    $table->integer('experience');
    $table->string('num_permis')->unique();
    $table->date('date_emission');
    $table->date('expiration');
    $table->enum('categorie', ['A1', 'B']);
    $table->unsignedBigInteger('chauffeur')->nullable();
    $table->timestamps();
    $table->foreign('chauffeur')->references('id')->on('chauffeurs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chauffeurs');
    }
};
