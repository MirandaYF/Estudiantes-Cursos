<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;

class Estudiante extends Model
{
    use HasFactory;
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'estudiante_curso');
    }
}
