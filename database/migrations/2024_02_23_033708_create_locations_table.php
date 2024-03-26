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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('lieu_d');
            $table->string('lieu_a');
            $table->date('date_location');
            $table->time('heure_debut')->nullable();
            $table->time('heure_fin')->nullable()->default(NULL);
            $table->enum('payer', ['Valider', 'En Cours'])->default('En Cours');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('vehicule_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
