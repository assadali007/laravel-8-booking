<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\BookController;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\ShowRoomsController;
use App\Http\Controllers\eloquent\relationshipController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('bookings',BookingController::class);
Route::resource('room_types',RoomTypeController::class);

Route::resource('books', BookController::class);
Route::get('/test', function () {
  
    return "Goodbye";
});

//Route::get('/rooms/{name}/{roomType?}',ShowRoomsController::class)->where('name','[A-Za-z]+');
Route::get('/rooms/{roomType?}',ShowRoomsController::class);


