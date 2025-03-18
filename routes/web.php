<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\ActividadEvaluableController;

Route::resource('asignaturas', AsignaturaController::class);

Route::get('asignaturas/{asignaturaId}/actividades/create', [ActividadEvaluableController::class, 'create'])->name('actividades.create');
Route::post('asignaturas/{asignaturaId}/actividades', [ActividadEvaluableController::class, 'store'])->name('actividades.store');
Route::get('actividades/{id}/edit', [ActividadEvaluableController::class, 'edit'])->name('actividades.edit');
Route::put('actividades/{id}', [ActividadEvaluableController::class, 'update'])->name('actividades.update');
Route::delete('actividades/{id}', [ActividadEvaluableController::class, 'destroy'])->name('actividades.destroy');

