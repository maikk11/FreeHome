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
        Schema::create('spese_ricavi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('causale', 255);
            $table->decimal('valore');
            $table->date('data')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('immobile_id');
            $table->foreign('immobile_id')->references('id')->on('immobili');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spese_ricavi');
    }
};
