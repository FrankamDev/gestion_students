<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
  // public function user()
  // {
  //   return $this->belongsTo(User::class, 'evaluation_id');
  // }
  public function modules()
  {
    return $this->hasMany(Module::class, 'evaluation_id');
  }
  public function anneesAcademiques()
  {
    return $this->hasMany(AnneeAccademique::class, 'evaluation_id');
  }
}