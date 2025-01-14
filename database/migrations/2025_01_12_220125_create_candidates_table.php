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
        Schema::create('candidates', function (Blueprint $table) {
            $table->uuid('idcandidat')->primary();
            $table->string('photo_cand')->nullable();
            $table->string('sexe_cand')->comment('homme, femme, autres');
            $table->string('nom_cand');
            $table->string('prenom_cand');
            $table->string('email_cand')->unique();
            $table->string('phone_cand', 50)->unique();
            $table->string('habitation_cand')->nullable();
            $table->string('experience_an_cand')->nullable();
            $table->string('experience_mois_cand')->nullable();
            $table->string('salaire_cand')->nullable();
            $table->string('password_cand');
            $table->integer('status_cand')->default(1)->comment('1 = active, 2 = inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
