<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id('user_id');
      $table->string('matricule', 40)->nullable();
      $table->string('nom', 22)->nullable();
      $table->string('prenom', 33)->nullable();
      $table->string('email', 50)->nullable();
      $table->char('sexe', 1)->nullable();
      $table->string('password', 255)->nullable();
      $table->string('role', 20)->nullable();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('users');
  }
};
