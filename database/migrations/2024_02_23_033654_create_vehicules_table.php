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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->enum('type', ['A', 'B','C','D']);
            $table->date('date_achat');
            $table->integer('kilometres');
            $table->string('matricule');
            $table->string('status');
            $table->string('marque');
            $table->integer('suivi_compteur');
            $table->foreignId('chauffeur_id')->constrained()->nullable();
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
