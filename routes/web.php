<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ContactController;
Use App\Http\Controllers\InscriptController;


// Main Page Route
Route::get('/', [WebController::class, 'index'])->name('app');
Route::get('/nosotros', [WebController::class, 'aboutus'])->name('nosotros');
Route::get('/contacto', [WebController::class, 'contact'])->name('contacto');
Route::get('/exitos', [WebController::class, 'successes'])->name('exitos');
Route::get('/proximos', [WebController::class, 'proximos'])->name('proximos');
Route::get('/proyectos', [WebController::class, 'proyectos'])->name('proyectos');
Route::get('/proyectos/{slug}', [WebController::class, 'proyectoDetalle'])->name('proyects.detalles');
Route::get('/cookies', [WebController::class, 'cookies'])->name('cookies');
Route::get('/privacidad', [WebController::class, 'politica'])->name('privacidad');


//Mandar Mail
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/upcoming', [InscriptController::class, 'store'])->name('inscript.store');
