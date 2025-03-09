<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Artwork', function (Blueprint $table) {
            $table->id('Id_Artwork')->primary();
            $table->string('Name_Artwork', 200)->unique();
            $table->text('Description_Artwork')->nullable();
            $table->foreignId('Id_Author')->constrained('Author')->references('Id_Author');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Artwork');
    }
};
