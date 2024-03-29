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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->date('date_achat');
            $table->integer('km_defaut');
            $table->string('matricule');
            $table->string('photo', 300)->nullable();
            $table->enum('statut', ['panne', 'location', 'disponible'])->default('disponible');
            $table->unsignedBigInteger('chauffeur')->nullable();
            $table->foreign('chauffeur')->references('id')->on('chauffeurs')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
