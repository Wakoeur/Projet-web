<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Anime', function (Blueprint $table) {
            $table->id('Id_Anime')->primary();
            $table->string('Specification_name', 50)->nullable();
            $table->integer('Nb_Episode_A');
            $table->string('State_Anime', 30);
            $table->date('Publication_Anime');
            $table->foreignId('Id_Artwork')->constrained('Artwork')->references('Id_Artwork');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Anime');
    }
};
