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
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
    $table->unsignedBigInteger('client_id'); 
    $table->foreign('client_id')->references('id')->on('users');
    $table->decimal('montant', 12, 2);
    $table->date('date_paiement');
    $table->string('moyen_paiement');
    $table->string('facture');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qualifications');
    }
};
