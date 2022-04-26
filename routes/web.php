<?php

use App\Http\Controllers\CasalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get("/", [CasalController::class, "index"])->name("inici");

Route::get("/anadir", [CasalController::class, "anadirCasal"])->name("anadir");
Route::post("/anadir/new", [CasalController::class, "anadirCasalBd"])->name("anadir-casal-bd");

Route::post("/eliminar", [CasalController::class, "eliminarCasal"])->name("eliminar-casal");

Route::post("/editar", [CasalController::class, "editarCasal"])->name("editar-casal");
Route::post("/editar/new", [CasalController::class, "editarCasalBd"])->name("editar-casal-bd");


