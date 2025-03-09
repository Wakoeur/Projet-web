<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('List', function (Blueprint $table) {
            $table->tinyinteger('Score_List')->nullable();
            $table->string('State_List', 30);
            $table->foreignId('Id_Account')->constrained('Account')->references('Id_Account');
            $table->foreignId('Id_Artwork')->constrained('Artwork')->references('Id_Artwork');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('List');
    }
};
