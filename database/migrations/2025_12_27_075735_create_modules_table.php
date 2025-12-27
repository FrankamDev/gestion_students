<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('modules', function (Blueprint $table) {
      $table->id('module_id');

      $table->unsignedBigInteger('evaluation_id');
      $table->string('code')->unique();
      $table->string('intitule');
      $table->integer('coefficient')->nullable();
      $table->integer('ordre')->nullable();
      $table->timestamps();

      $table->foreign('evaluation_id')->references('evaluation_id')->on('evaluations')->onDelete('restrict');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('modules');
  }
};
