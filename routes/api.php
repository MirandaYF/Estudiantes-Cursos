<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/estudiantes', [EstudianteController::class, 'estudiantesQuintoGrado']);

Route::get('/estudinatesCursos', [EstudianteController::class, 'estudiantesCursos']);

Route::get('/estudianteSexto', [EstudianteController::class, 'estudiantesSextoGrado']);

Route::post('GuardarEstudiante', [EstudianteController::class, 'guardarEstudiante']);

Route::get('/ciDesc', [EstudianteController::class, 'ordenarPorCIDescendente']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
