<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
  public function evaluation()
  {
    return $this->belongsTo(Evaluation::class, 'evaluation_id');
  }
  public function specialites()
  {
    return $this->hasMany(Specialite::class, 'module_id');
  }
}
