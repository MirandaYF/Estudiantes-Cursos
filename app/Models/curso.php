<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estudiante;

class curso extends Model
{
    use HasFactory;
    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class, 'estudiante_cursos');
    }
}
