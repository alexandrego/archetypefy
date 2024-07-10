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
        Schema::create('comportamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('comportamento1', 1)->nullable();
            $table->string('comportamento2', 1)->nullable();
            $table->string('comportamento3', 1)->nullable();
            $table->string('comportamento4', 1)->nullable();
            $table->string('comportamento5', 1)->nullable();
            $table->string('comportamento6', 1)->nullable();
            $table->string('comportamento7', 1)->nullable();
            $table->string('comportamento8', 1)->nullable();
            $table->string('comportamento9', 1)->nullable();
            $table->string('comportamento10', 1)->nullable();
            $table->string('comportamento11', 1)->nullable();
            $table->string('comportamento12', 1)->nullable();
            $table->string('comportamento13', 1)->nullable();
            $table->string('comportamento14', 1)->nullable();
            $table->string('comportamento15', 1)->nullable();
            $table->string('comportamento16', 1)->nullable();
            $table->string('comportamento17', 1)->nullable();
            $table->string('comportamento18', 1)->nullable();
            $table->string('comportamento19', 1)->nullable();
            $table->string('comportamento20', 1)->nullable();
            $table->string('comportamento21', 1)->nullable();
            $table->string('comportamento22', 1)->nullable();
            $table->string('comportamento23', 1)->nullable();
            $table->string('comportamento24', 1)->nullable();
            $table->string('comportamento25', 1)->nullable();
            $table->string('comportamento26', 1)->nullable();
            $table->string('comportamento27', 1)->nullable();
            $table->string('comportamento28', 1)->nullable();
            $table->string('comportamento29', 1)->nullable();
            $table->string('comportamento30', 1)->nullable();
            $table->string('comportamento31', 1)->nullable();
            $table->string('comportamento32', 1)->nullable();
            $table->string('comportamento33', 1)->nullable();
            $table->string('comportamento34', 1)->nullable();
            $table->string('comportamento35', 1)->nullable();
            $table->string('comportamento36', 1)->nullable();
            $table->string('comportamento37', 1)->nullable();
            $table->string('comportamento38', 1)->nullable();
            $table->string('comportamento39', 1)->nullable();
            $table->string('comportamento40', 1)->nullable();
            $table->integer('times_exec')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comportamentos');
    }
};
