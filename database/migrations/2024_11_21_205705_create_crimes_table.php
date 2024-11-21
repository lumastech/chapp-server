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
        Schema::create('crimes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('type', 20);
            $table->string('phone', 20)->nullable();
            $table->string('area', 50);
            $table->string('details', 250);
            $table->string('status')->default('active');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crimes');
    }
};
