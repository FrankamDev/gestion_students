<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('specialites', function (Blueprint $table) {
      $table->id('specialite_id');

      $table->unsignedBigInteger('user_id');
      $table->unsignedBigInteger('module_id');
      $table->string('specialite_code', 100)->unique();
      $table->string('specialite_intitule', 100)->nullable();
      $table->text('description')->nullable();
      $table->timestamps();

      $table->foreign('user_id')->references('user_id')->on('users')->onDelete('restrict');
      $table->foreign('module_id')->references('module_id')->on('modules')->onDelete('restrict');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('specialites');
  }
};
