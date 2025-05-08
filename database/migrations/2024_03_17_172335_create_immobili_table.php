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
        Schema::create('immobili', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('provincia', 2);
            $table->string('comune', 50);
            $table->string('indirizzo', 50);
            $table->integer('civico');
            $table->integer('locali_affittabili')->nullable();
            $table->integer('locali_affittati')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immobili');
    }
};
