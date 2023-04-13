<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//  rest password اللى هى اللوجن والريجستير وال routes فيها كل ال  
Auth::routes(['verify'=>true]); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/redirect/{service}', [App\Http\Controllers\Socialite::class, 'SocialRedirect']);
Route::get('/callback/{service}', [App\Http\Controllers\Socialite::class, 'CallbackRedirect']);
