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
        Schema::create('temperamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('temper1', 1)->nullable();
            $table->string('temper2', 1)->nullable();
            $table->string('temper3', 1)->nullable();
            $table->string('temper4', 1)->nullable();
            $table->string('temper5', 1)->nullable();
            $table->string('temper6', 1)->nullable();
            $table->string('temper7', 1)->nullable();
            $table->string('temper8', 1)->nullable();
            $table->string('temper9', 1)->nullable();
            $table->string('temper10', 1)->nullable();
            $table->string('temper11', 1)->nullable();
            $table->string('temper12', 1)->nullable();
            $table->string('temper13', 1)->nullable();
            $table->string('temper14', 1)->nullable();
            $table->string('temper15', 1)->nullable();
            $table->string('temper16', 1)->nullable();
            $table->string('temper17', 1)->nullable();
            $table->string('temper18', 1)->nullable();
            $table->string('temper19', 1)->nullable();
            $table->string('temper20', 1)->nullable();
            $table->integer('times_exec')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temperamentos');
    }
};
