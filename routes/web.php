<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::get('/nalogovoe-i-bukhgalterskoe-konsultirovanie-v-stranakh-eaes', [App\Http\Controllers\MainController::class, 'page2'])->name('page2');
Route::get('/upravlenie-i-operatsii-s-nedvizhimym-imushchestvom-v-stranakh-eaes', [App\Http\Controllers\MainController::class, 'page3'])->name('page3');
Route::get('/mezhdunarodnye-konsaltingovye-uslugi-v-stranakh-brics', [App\Http\Controllers\MainController::class, 'page4'])->name('page4');
Route::get('/razrabotka-strategii-upravleniya-proektami', [App\Http\Controllers\MainController::class, 'page5'])->name('page5');
Route::get('/big-data', [App\Http\Controllers\MainController::class, 'page6'])->name('page6');
Route::post('/send', [App\Http\Controllers\MainController::class, 'send'])->name('send');
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('switchLang');
