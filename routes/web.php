<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/characterpop', function () {
    return view('welcome');
    $characterpop = characterpop::all();
});


use App\Http\Controllers\CharacterController;

Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');
Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');
