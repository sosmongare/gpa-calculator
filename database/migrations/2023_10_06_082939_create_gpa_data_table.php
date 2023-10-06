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
        Schema::create('gpa_data', function (Blueprint $table) {
            $table->id();
            $table->integer('gradeA');
            $table->integer('gradeB');
            $table->integer('gradeC');
            $table->integer('gradeD');
            $table->decimal('gpa', 5, 3);
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->boolean('is_mobile')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gpa_data');
    }
};
