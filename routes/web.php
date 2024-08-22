<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 
'homepage'])->name('home'); //! home è l'etichetta per chiamare la rotta

//rotta di contatto
Route::get('/contattaci', [PublicController::class, 'contactUS'])->name('contact.us');

Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');

//thank you page
Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankYou.page');