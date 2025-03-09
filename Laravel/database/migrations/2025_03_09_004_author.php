<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Author', function (Blueprint $table) {
            $table->id('Id_Author')->primary();
            $table->string('F_Name_Author', 50)->nullable();
            $table->string('Alias_Author', 50)->nullable();
            $table->string('S_Name_Author', 50)->nullable();
            $table->string('L_Name_Author', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Author');
    }
};
