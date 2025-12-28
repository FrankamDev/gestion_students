<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  /** @use HasFactory<\Database\Factories\UserFactory> */
  use HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
    'matricule',
    'nom',
    'prenom',
    'email',
    'password',
    'role',
  ];
  protected $primaryKey = 'user_id';

  public function bilans()
  {
    return $this->hasMany(BilanCompetence::class, 'user_id');
  }
  public function evaluations()
  {
    return $this->hasMany(Evaluation::class, 'evaluation_id');
  }
  public function anneeAcademiques()
  {
    return $this->hasMany(AnneeAccademique::class, 'user_id');
  }
  public function specialites()
  {
    return $this->hasMany(Specialite::class, 'user_id');
  }
  public function estInscrit()
  {
    return $this->hasMany(EstInscrit::class, 'user_id');
  }

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var list<string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
  }
}
