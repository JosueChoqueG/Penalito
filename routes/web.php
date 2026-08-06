<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/capacitacion', [PagesController::class, 'capacitacion'])->name('capacitacion');
Route::get('/case', [PagesController::class, 'casesPage'])->name('case');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/libros', [PagesController::class, 'libros'])->name('libros');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/videos', [PagesController::class, 'videos'])->name('videos');
Route::get('/suscripcion', [PagesController::class, 'suscripcion'])->name('suscripcion');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/verificador', [PagesController::class, 'verificador'])->name('verificador');
Route::get('/inscripcion', [PagesController::class, 'inscripcion'])->name('inscripcion');

Route::fallback([PagesController::class, 'notFound'])->name('notFound');
