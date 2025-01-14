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
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('idproj')->primary();
            $table->string('titre_projet');
            $table->string('role_projet');
            $table->string('lien_projet')->nullable();
            $table->integer('sur_projet')->default(0)->comment('0 = inactive, 1 = active');
            $table->string('debut_projet');
            $table->string('fin_projet');
            $table->longText('description_projet');
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
        Schema::dropIfExists('projects');
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['candidat_id']);
            $table->dropColumn('candidat_id');
        });
    }
};
