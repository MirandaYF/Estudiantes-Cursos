<?php

namespace App\Http\Controllers;

use App\Models\curso as ModelsCurso;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\estudiante_curso;
use Illuminate\Pagination\Curso;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{

    public function estudiantesQuintoGrado()
    {
        $estudiantes = DB::table('estudiantes')
            ->join('estudiante_cursos', 'estudiantes.id', '=', 'estudiante_cursos.estudiante_id')
            ->join('cursos', 'estudiante_cursos.curso_id', '=', 'cursos.id')
            ->where('cursos.grado', '=', 5)
            ->select('estudiantes.id', 'estudiantes.nombre', 'estudiantes.ci')
            ->get();

        return response()->json($estudiantes);
    }

    public function estudiantesCursos()
    {
        $estudiantesCursos = DB::table('estudiantes AS e')
            ->join('estudiante_cursos AS ec', 'e.id', '=', 'ec.estudiante_id')
            ->join('cursos AS c', 'ec.curso_id', '=', 'c.id')
            ->select('e.id AS estudiante_id', 'e.nombre AS nombre_estudiante', 'c.grado AS grado_curso')
            ->get();

        return response()->json($estudiantesCursos);
    }


    public function estudiantesSextoGrado()
    {
        $estudiantesSextoGrado = DB::table('estudiantes AS e')
            ->join('estudiante_cursos AS ec', 'e.id', '=', 'ec.estudiante_id')
            ->join('cursos AS c', 'ec.curso_id', '=', 'c.id')
            ->where('c.grado', '=', 6)
            ->select('e.id', 'e.nombre', 'e.ci', 'c.descripcion AS curso')
            ->limit(5)
            ->get();

        return response()->json($estudiantesSextoGrado);
    }
    

    public function ordenarPorCIDescendente()
    {
        $estudiantes = DB::table('estudiantes')
            ->select('id', 'nombre', 'ci')
            ->orderBy('ci', 'DESC')
            ->get();

        return response()->json($estudiantes);
    }
}