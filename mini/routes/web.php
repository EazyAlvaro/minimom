<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InviteController;

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


Route::get('/events', [EventController::class, 'list']);

Route::get('/event/{id}', [EventController::class, 'show']);

Route::get('/event/{eventId}/invite/{inviteId}/edit', [InviteController::class, 'show']);

Route::get('/', function () {
    return view("home");
});