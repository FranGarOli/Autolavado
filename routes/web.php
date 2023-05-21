<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PDFController;
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

//FRONT------------------------------------------------------------------------

//principal
Route::get('/', [StaticPagesController::class, 'index'])->name('index');

//politicas
Route::get('cookies', [StaticPagesController::class, 'cookies'])->name('cookies');

//servicios
Route::get('services', [StaticPagesController::class, 'services'])->name('services');

//contacto con nosotros
Route::get('contact', [StaticPagesController::class, 'contact'])->name('contact');

//reservar citas
Route::get('dateBooking', [StaticPagesController::class, 'dateBookings'])->name('dateBookings');


//BACK-------------------------------------------------------------------------
//Rutas para el login
Route::get('login', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class, 'login'])->name('login');

//Rutas para registros
Route::resource('registers', RegisterController::class)->middleware('auth');

//Ruta para crear registro desde reserva
Route::post('saveBooking', [StaticPagesController::class, 'saveBooking'])->name('saveBooking');

//Rutas para el cliente
Route::resource('clients', ClientController::class)->middleware('auth');

//Ruta buscar cliente -No operativa-
Route::get('client/search', 'ClientController@search')->name('client.search');

//Rutas para los servicios
Route::resource('services', ServiceController::class)->middleware('auth');

//peticion api coger datos clientes
Route::get('/getAllClients', [ServiceController::class, 'getAllClients'])
    ->name('getAllClients')
    ->middleware('auth');


//peticion api coger servicios
Route::get('/getAllServices', [ServiceController::class, 'getAllServices'])
    ->name('allServices')
    ->middleware('auth');


//Peticion mandar correo email de contacto
Route::post('sendEmail', [StaticPagesController::class, 'sendEmail'])->name('sendEmail');

//Peticion para generar el pdf de un registro
Route::get('/generatePDF/{register}', [PDFController::class, 'getPDF'])->name('generatePDF');
