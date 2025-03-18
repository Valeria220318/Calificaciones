<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadEvaluable extends Model
{
    use HasFactory;

    protected $fillable = ['asignatura_id', 'tipo_actividad', 'calificacion', 'fecha'];

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}

