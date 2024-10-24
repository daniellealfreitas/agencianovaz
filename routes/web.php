<?php
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('profile', function () {
    return view('profile');
});

Route::get('/services/websites', function () {
    return view('services.websites');
})->name('services.websites');

Route::get('/services/loja-virtual', function () {
    return view('services.loja-virtual');
})->name('services.loja-virtual');



Route::post('/envia-contato', [ContatoController::class, 'enviar'])->name('envia.contato');
