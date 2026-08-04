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
        Schema::create('why_why_analyses', function (Blueprint $table) {
            $table->id();
            $table->string('cause_id');
            $table->string('why1')->nullable();
            $table->string('why2')->nullable();
            $table->string('why3')->nullable();
            $table->string('why4')->nullable();
            $table->string('why5')->nullable();
            $table->string('why6')->nullable();
            $table->string('why7')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_why_analyses');
    }
};
