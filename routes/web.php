<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\Email_inputController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

//routes solutions
Route::get('/solutions', [SolutionController::class, 'index'])->name('solutions');


//routes accueil

Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil');

//routes Captcha

Route::get('/captcha', [CaptchaController::class, 'index'])->name('captcha');

//routes email-chiant

Route::get('/email_input', [Email_inputController::class, 'index'])->name('email_input');
