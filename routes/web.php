<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Auth::routes();

Route::get('/search_flight', [App\Http\Controllers\HomeController::class, 'showPageGuest'])->name('guest');
Route::post('/fullsearch',[\App\Http\Controllers\AppController::class,'searchFlight'])->name('search_flight');
Route::get('/fullsearch',[\App\Http\Controllers\AppController::class,'pageFullSearch'])->name('fullsearch');
Route::get('/prebooking',[\App\Http\Controllers\AppController::class,'pagePrebooking'])->name('prebooking');
Route::group(['prefix' => 'customers'], function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'showPageAdmin'])->name('customers.list');
    Route::get('/add',[CustomerController::class,'add'])->name('customers.add');
    Route::post('/add',[CustomerController::class,'store'])->name('customers.store');
    Route::get('/{id}/edit',[CustomerController::class,'edit'])->name('customers.edit');
    Route::post('/{id}/edit',[CustomerController::class,'update'])->name('customers.update');
    Route::get('/{id}/delete',[CustomerController::class,'destroy'])->name('customers.delete');
});
Route::group(['prefix' => 'passengers'], function (){
    Route::get('/',[PassengerController::class,'index'])->name('passengers.list');
    Route::get('/add',[PassengerController::class,'add'])->name('passengers.add');
    Route::post('/add',[PassengerController::class,'store'])->name('passengers.store');
    Route::get('/{id}/edit',[PassengerController::class,'edit'])->name('passengers.edit');
    Route::post('/{id}/edit',[PassengerController::class,'update'])->name('passengers.update');
    Route::get('/{id}/delete',[PassengerController::class,'destroy'])->name('passengers.delete');
});
Route::group(['prefix' => 'flights'], function (){
    Route::get('/',[FlightController::class,'index'])->name('flights.list');
    Route::get('/add',[FlightController::class,'add'])->name('flights.add');
    Route::post('/add',[FlightController::class,'store'])->name('flights.store');
    Route::get('/{id}/edit',[FlightController::class,'edit'])->name('flights.edit');
    Route::post('/{id}/edit',[FlightController::class,'update'])->name('flights.update');
    Route::get('/{id}/delete',[FlightController::class,'destroy'])->name('flights.delete');
});
Route::group(['prefix' => 'tickets'], function (){
    Route::get('/',[TicketController::class,'index'])->name('tickets.list');
    Route::get('/add',[TicketController::class,'add'])->name('tickets.add');
    Route::post('/add',[TicketController::class,'store'])->name('tickets.store');
    Route::get('/{id}/edit',[TicketController::class,'edit'])->name('tickets.edit');
    Route::post('/{id}/edit',[TicketController::class,'update'])->name('tickets.update');
    Route::get('/{id}/delete',[TicketController::class,'destroy'])->name('tickets.delete');
});
