<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnneeAccademique extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
  public function bilan()
  {
    return $this->belongsTo(BilanCompetence::class, 'bilan_id');
  }
  public function evaluation()
  {
    return $this->belongsTo(Evaluation::class, 'evaluation_id');
  }
  public function estInscrit()
  {
    return $this->hasMany(EstInscrit::class, 'anneeaccademiques_id');
  }
}
