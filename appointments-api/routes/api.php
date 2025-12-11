<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AppointmentController;

// Ruta simple para verificar que la API funciona
Route::get('/test', function () {
    return ['status' => 'API OK'];
});

// Rutas CRUD automáticas para citas (index, store, show, update, destroy)
Route::apiResource('appointments', AppointmentController::class);
