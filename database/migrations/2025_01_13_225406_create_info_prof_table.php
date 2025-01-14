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
        Schema::create('info_prof', function (Blueprint $table) {
            $table->uuid('idinfo')->primary();
            $table->string('secteur_info');
            $table->string('departement_info');
            $table->string('categorie_info');
            $table->string('fonction_info');
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
        Schema::dropIfExists('info_prof');
        Schema::table('info_prof', function (Blueprint $table) {
            $table->dropForeign(['candidat_id']);
            $table->dropColumn('candidat_id');
        });
    }
};
