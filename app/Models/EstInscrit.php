<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstInscrit extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
  public function anneeAcademique()
  {
    return $this->belongsTo(AnneeAccademique::class, 'anneeaccademiques_id');
  }
}
