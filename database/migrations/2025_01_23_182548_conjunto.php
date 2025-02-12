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
        Schema::create("conjuntos", function (Blueprint $table)
        {
            $table->id();
            $table->string("nombre");
            $table->string("direccion");
            $table->timestamp("updated_at");
            $table->timestamp("created_at")->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conjuntos');
    }
};
