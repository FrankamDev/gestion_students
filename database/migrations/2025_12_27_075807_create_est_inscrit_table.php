<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('est_inscrit', function (Blueprint $table) {
      $table->unsignedBigInteger('user_id');
      $table->unsignedBigInteger('anneeaccademiques_id');
      $table->timestamps();

      $table->primary(['user_id', 'anneeaccademiques_id']);

      $table->foreign('user_id')->references('user_id')->on('users')->onDelete('restrict');
      $table->foreign('anneeaccademiques_id')->references('anneeaccademiques_id')->on('anneeaccademiques')->onDelete('restrict');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('est_inscrit');
  }
};
