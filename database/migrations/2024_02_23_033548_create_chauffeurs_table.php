<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('photo')->nullable();
            $table->integer('experiences');
            $table->integer('numero_permis')->unique();
            $table->date('date_emission_permis');
            $table->date('date_expiration_permis');
            $table->enum('categorie', ['A', 'B','C','D']);
            $table->string('contrat')->nullable();
            $table->timestamps();
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
