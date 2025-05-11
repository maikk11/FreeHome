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
        Schema::create('stanze', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_stanza', 255);
            $table->decimal('prezzo_affitto');
            $table->integer('metri_quadri');
            $table->integer('flag_balcone');
            $table->unsignedBigInteger('immobile_id');
            $table->foreign('immobile_id')->references('id')->on('immobili');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stanze');
    }
};
