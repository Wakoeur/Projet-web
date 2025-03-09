<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Studio', function (Blueprint $table) {
            $table->id('Id_Studio')->primary();
            $table->string('Name_Studio', 50)->unique();
            $table->string('Type_Studio', 30)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Studio');
    }
};
