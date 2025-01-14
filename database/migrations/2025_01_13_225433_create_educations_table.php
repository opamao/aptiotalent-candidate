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
        Schema::create('educations', function (Blueprint $table) {
            $table->uuid('idedu')->primary();
            $table->string('etudie');
            $table->string('nom_etablissement');
            $table->string('titre_formation');
            $table->string('debut_formation_an')->default(0);
            $table->string('debut_formation_mois')->default(0);
            $table->string('fin_formation_an')->default(0);
            $table->string('fin_formation_mois')->default(0);
            $table->uuid('candidat_id');
            $table->foreign('candidat_id')->references('idcandidat')->on('candidates')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
        Schema::table('educations', function (Blueprint $table) {
            $table->dropForeign(['candidat_id']);
            $table->dropColumn('candidat_id');
        });
    }
};
