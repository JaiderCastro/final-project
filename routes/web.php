<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\MedicinesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotificationsController;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboardd', function () {
    return view('user.dashboardd');
})->name('user');

Route::get('/dashboardd/medicines', [MedicinesController::class, 'index'])->name('medicines.index');
Route::post('/medicines', [MedicinesController::class, 'store'])->name('medicines.store');
Route::get('/medicines/create', [MedicinesController::class, 'create'])->name('medicines.create');
 Route::get('/medicines/edit/{id}', [MedicinesController::class, 'edit'])->name('medicines.edit');
 Route::get('/cart/edd/{id}', [MedicinesController::class, 'edqu'])->name('medicines.edd');
 Route::put('/cart/{id}', [MedicinesController::class, 'upqu'])->name('medicines.upqu'); 
Route::get('/medicines/facturacion', [MedicinesController::class, 'facturacion'])->name('medicines.facturacion');
Route::get('cart', [MedicinesController::class, 'cart'])->name('medicines.cart');
Route::get('add_cart/{id}', [MedicinesController::class, 'add_cart'])->name('medicines.add_cart');
Route::get('cart_trash/{cart}', [MedicinesController::class, 'cart_trash'])->name('medicines.cart_trash');
Route::post('cart_remover/{id}', [MedicinesController::class, 'cart_remover'])->name('medicines.cart_remover');
Route::get('cart_pdf', [MedicinesController::class, 'createPDF'])->name('medicines.pdf');
Route::get('/medicines/search', [MedicinesController::class, 'search'])->name('medicines.search');
Route::put('/medicines/{id}', [MedicinesController::class, 'update'])->name('medicines.update'); 
Route::delete('/medicines/{id}', [MedicinesController::class, 'destroy'])->name('medicines.destroy');

Route::get('/dashboardd/customers', [CustomersController::class, 'index'])->name('customers.index');
Route::post('/customers', [CustomersController::class, 'store'])->name('customers.store');
Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
Route::get('/customers/edit/{id}', [CustomersController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{id}', [CustomersController::class, 'update'])->name('customers.update'); 
Route::delete('/customers/{id}', [CustomersController::class, 'destroy'])->name('customers.destroy');

/* Route::get('/dashboardd/records', [RecordsController::class, 'index'])->name('records.index');
Route::get('/dashboardd/validar/{cant1}/{cant2}', [RecordsController::class, 'validar'])->name('records.validar'); */

Route::get('/sumar', function(){
   return view('formularios.sumar');
});

Route::get('/restar', function(){
    return view('formularios.restar');
 });

 Route::get('/multiplicar', function(){
    return view('formularios.multiplicar');
 });

 Route::get('/dividir', function(){
    return view('formularios.dividir');
 });



Route::post('suma', function (HttpRequest $request) {
    $suma=$request->numero_uno+$request->numero_dos;
    $request->offsetSet('suma', $suma);
    return view('resultados.suma', ['suma' => $request->suma]);
    
});

Route::post('resta', function (HttpRequest $request) {
    $resta=$request->numero_uno-$request->numero_dos;
    $request->offsetSet('resta', $resta);
    return view('resultados.resta', ['resta' => $request->resta]);
    
});

Route::post('multiplicacion', function (HttpRequest $request) {
    $multiplica=$request->numero_uno*$request->numero_dos;
    $request->offsetSet('multiplicacion', $multiplica);
    return view('resultados.multiplicacion', ['multiplicacion' => $request->multiplicacion]);
    
});

Route::post('division', function (HttpRequest $request) {
    $divide=$request->numero_uno/$request->numero_dos;
    $request->offsetSet('division', $divide);
    return view('resultados.division', ['division' => $request->division]);
    
});

Route::get('/customers/notifications', [NotificationsController::class, 'index'])->name('notifications.index');
Route::post('/notifications', [NotificationsController::class, 'store'])->name('notifications.store');

/* Route::get('/cart/email', [MedicinesController::class, 'email'])->name('medicines.email');
Route::post('/medicines', [MedicinesController::class, 'validaemail'])->name('medicines.validaemail'); */

// Route::get('/dashboardd/records', [RecordsController::class, 'index'])->name('Records.index');
Route::get('/dashboardd/records/add', [RecordsController::class, 'add'])->name('Records.add');


 