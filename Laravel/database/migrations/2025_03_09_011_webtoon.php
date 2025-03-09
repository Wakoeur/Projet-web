<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Webtoon', function (Blueprint $table) {
            $table->id('Id_Webtoon')->primary();
            $table->integer('Nb_Chapters_W');
            $table->string('State_Webtoon', 30);
            $table->date('Publication_Webtoon');
            $table->foreignId('Id_Artwork')->constrained('Artwork')->references('Id_Artwork');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Webtoon');
    }
};
