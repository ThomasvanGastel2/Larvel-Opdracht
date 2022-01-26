<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\TicketController;

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

Route::get('/welcome',[PagesController::class, 'home'])->name('home');

Route::get('/dashboard',[PagesController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/test',[PagesController::class, 'test'])->name('test');

Route::get('/test2',[PagesController::class, 'test2'])->name('test2');

Route::get('/events',[PagesController::class, 'events'])
    ->name('events');

Route::group(['prefix' => 'dashboard', 'middelware' => 'auth'],function (){
    Route::resource('events',\App\Http\Controllers\EventsController::class );

Route::get('/events/{id}/buy', [\App\Http\Controllers\TicketController::class, 'showBuyTicketForm'])
    ->name('events.showBuyTicketForm')
    ->middleware('auth');

Route::get('/events/{order_id}/confirmOrder', [\App\Http\Controllers\OrderController::class, 'confirmOrder'])
    ->name('events.confirmOrder')
    ->middleware('auth');

Route::post('/events/{id}/buy', [TicketController::class, 'orderTicket'])
    ->name('event.orderTicket')
    ->middleware('auth');

});

require __DIR__.'/auth.php';
