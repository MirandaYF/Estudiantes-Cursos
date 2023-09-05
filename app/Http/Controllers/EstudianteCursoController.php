<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante_curso;


class EstudianteCursoController extends Controller
{
    public function index()
    {
        $estudianteCursos = estudiante_curso::all();

        return response()->json($estudianteCursos);
    }
}
