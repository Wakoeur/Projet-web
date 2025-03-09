<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Manga', function (Blueprint $table) {
            $table->id('Id_Manga')->primary();
            $table->integer('Nb_Chapters_M');
            $table->string('State_Manga', 30);
            $table->date('Publication_Manga');
            $table->foreignId('Id_Artwork')->constrained('Artwork')->references('Id_Artwork');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Manga');
    }
};
