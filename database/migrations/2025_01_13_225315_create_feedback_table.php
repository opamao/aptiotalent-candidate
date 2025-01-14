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
        Schema::create('feedback', function (Blueprint $table) {
            $table->uuid('idfeed')->primary();
            $table->longText('contenu_feed');
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
        Schema::dropIfExists('feedback');
        Schema::table('feedback', function (Blueprint $table) {
            $table->dropForeign(['candidat_id']);
            $table->dropColumn('candidat_id');
        });
    }
};
