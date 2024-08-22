<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

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
    return view('main');
});

Route::get('/CV', function () {
    return view('CV');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin.index');
});

Route::post('/CV', [PendaftaranController::class, 'store']);
Route::get('/CV', [PendaftaranController::class, 'showForm']);

Route::get('/admin', [PendaftaranController::class, 'admin']);;
Route::get('/admin', [PendaftaranController::class, 'admin'])->name('admin');

Route::get('/login', [PendaftaranController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PendaftaranController::class, 'login']);


