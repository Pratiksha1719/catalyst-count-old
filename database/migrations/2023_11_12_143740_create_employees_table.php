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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->nullable();
            $table->string('name')->nullable();
            $table->string('domain')->nullable();
            $table->integer('year_founded')->nullable();
            $table->string('industry')->nullable();
            $table->string('size_range')->nullable();
            $table->string('locality')->nullable();
            $table->string('country')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('current_employee_estimate')->nullable();
            $table->string('total_employee_estimate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
