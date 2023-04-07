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
        Schema::create('institution_kpis', function (Blueprint $table) {
            $table->id();
            
            $table->json('payload');
            $table->double('target')->unsigned();
            $table->double('result');
            $table->date('from_date');
            $table->date('to_date');
            $table->foreignId('kpi_id')->constrained('kpis', 'id')->cascadeOnDelete();
            $table->foreignId('institution_id')->constrained('institutions', 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institution_kpis');
    }
};
