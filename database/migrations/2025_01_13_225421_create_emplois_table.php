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
        Schema::create('emplois', function (Blueprint $table) {
            $table->uuid('idemp')->primary();
            $table->string('entreprise_actuelle', 20);
            $table->integer('experience_an')->default(0);
            $table->integer('experience_mois')->default(0);
            $table->string('nom_entreprise');
            $table->string('date_entree');
            $table->integer('salaire_annuel');
            $table->string('preavis');
            $table->string('titre_poste');
            $table->uuid('typeemploi_id');
            $table->foreign('typeemploi_id')->references('idtyemp')->on('type_emploi');
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
        Schema::dropIfExists('emplois');
        Schema::table('emplois', function (Blueprint $table) {
            $table->dropForeign(['candidat_id','typeemploi_id']);
            $table->dropColumn('candidat_id');
            $table->dropColumn('typeemploi_id');
        });
    }
};
