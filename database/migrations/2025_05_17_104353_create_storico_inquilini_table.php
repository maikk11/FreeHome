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
        Schema::create('storico_inquilini', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 255);
            $table->string('cognome', 255);
            $table->date('data_subentro')->nullable();
            $table->date('data_uscita')->nullable();
            $table->unsignedBigInteger('immobile_id')->nullable();
            $table->foreign('immobile_id')->references('id')->on('immobili')->onDelete('set null');
            $table->unsignedBigInteger('stanza_id')->nullable();
            $table->foreign('stanza_id')->references('id')->on('stanze')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storico_inquilini');
    }
};
