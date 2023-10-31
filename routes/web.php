<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuatrtextController;
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



Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::middleware('auth')->group(function () {
    Route::get('/quatrtext', [QuatrtextController::class, 'index'])->name('quatrtext');
    Route::post('/quatrtext', [QuatrtextController::class, 'new'])->name('quatrtext.new');
    Route::patch('/quatrtext/{id}', [QuatrtextController::class, 'update'])->name('quatrtext.update');
    Route::delete('/quatrtext/{id}', [QuatrtextController::class, 'destroy'])->name('quatrtext.destroy');
    //Route::get('/files/tickets/{id}/{folder}/{name}', function ($id) {
        //$path = "tickets/{$id}/{$folder}/{$name}";
        //return view('welcome');
    //})->where(['id' => '[0-9]+', 'folder' => '[0-9]+', 'name' => '[A-Za-z0-9]{10}\.(jpg|img)$']);
});


Route::get('/', function () {
    return view('welcome');
});

