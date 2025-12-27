<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('anneeaccademiques', function (Blueprint $table) {
      $table->id('anneeaccademiques_id');

      $table->unsignedBigInteger('user_id');
      $table->unsignedBigInteger('bilan_id');
      $table->unsignedBigInteger('evaluation_id');

      $table->char('libelle', 33)->nullable();
      $table->date('date_debut')->nullable();
      $table->date('date_fin')->nullable();
      $table->boolean('statut')->nullable();
      $table->timestamps();

      // Foreign keys explicites
      $table->foreign('user_id')->references('user_id')->on('users')->onDelete('restrict');
      $table->foreign('bilan_id')->references('bilan_id')->on('bilancompetences')->onDelete('restrict');
      $table->foreign('evaluation_id')->references('evaluation_id')->on('evaluations')->onDelete('restrict');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('anneeaccademiques');
  }
};
