<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PruebaController ;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ContactanosController ;
use App\Http\Controllers\MessageController ;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
/* ruta directa sin controlador*/
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [MessageController::class, 'store'])->name('message.store');
/* Route::get('/contact', [ContactController::class, 'index'])->name('contact');
 */
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('prueba',[PruebaController::class])->name('prueba');

Route::get('recurso',[ResourceController::class,'index'])->name('recurso');

/*  https://likonet.es/2022/10/30/laravel-envio-de-mails-con-formulario-parte-21/  */
/* Route::get('contactanos', function() {
    $correo = new ContactanosMailable;
    Mail::to('albertomozodocente@gmail.com')->send($correo);
    return "mensaje enviado";
})->name('contactanos.index'); */

Route::post('contact',[ContactanosController::class, 'store'])->name('contactanos.store');



