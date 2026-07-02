<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

Route::get('/admin/contact', [ContactController::class, 'index'])
    ->name('admin.contact');

Route::delete('/admin/contact/{id}', [ContactController::class, 'destroy'])
    ->name('contact.destroy');