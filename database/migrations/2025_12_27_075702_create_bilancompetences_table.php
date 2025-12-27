<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('bilancompetences', function (Blueprint $table) {
      $table->id('bilan_id');
      $table->unsignedBigInteger('user_id')->nullable();
      $table->decimal('moyenne_semestre1')->nullable();
      $table->decimal('moyenne_semestre2')->nullable();
      $table->decimal('moyenne_generale')->nullable();
      $table->decimal('moyenne_competences')->nullable();
      $table->string('observations', 30)->nullable();
      $table->timestamps();

      $table->foreign('user_id')->references('user_id')->on('users')->onDelete('restrict');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('bilancompetences');
  }
};
