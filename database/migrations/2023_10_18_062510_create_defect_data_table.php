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
        Schema::create('defect_data', function (Blueprint $table) {
            $table->id();
            $table->string('model_id');
            $table->string('defect_id');
            $table->string('defect_status');
            $table->string('quantity');
            $table->string('date_time');
            $table->string('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defect_data');
    }
};
