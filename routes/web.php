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

Route::get('/services/midias-sociais', function () {
    return view('services.midias-sociais');
})->name('services.midias-sociais');

Route::get('/services/criacao-grafica', function () {
    return view('services.criacao-grafica');
})->name('services.criacao-grafica');


Route::get('/services/detetive-particular', function () {
    return view('services.detetive-particular');
})->name('services.detetive-particular');


Route::get('/novaxxx/homexxx', function () {
    return view('novaxxx/homexxx');
})->name('novaxxx/homexxx');


Route::post('/envia-contato', [ContatoController::class, 'enviaContato'])->name('envia.contato');





