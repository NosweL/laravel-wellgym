<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Auth\PaketController;
use App\Http\Controllers\API\Auth\CoachController;
use App\Http\Controllers\API\Auth\JadwalController;
use App\Http\Controllers\API\Auth\TransaksiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::prefix('jadwal')->group(function(){
    Route::get('/create', [JadwalController::class, 'JadwalCreate']);
    Route::post('/store', [JadwalController::class, 'JadwalStore']);
    route::get('/view/{id}',[JadwalController::class, 'JadwalView']);
    route::get('/riwayat/{id}',[JadwalController::class, 'JadwalRiwayat']);
});

Route::prefix('paket')->group(function(){
    route::get('/view',[PaketController::class, 'PaketView']);
    route::post('/add',[PaketController::class, 'PaketAdd']);
    route::put('/update/{id}',[PaketController::class, 'PaketUpdate']);
    route::delete('/delete/{id}',[PaketController::class, 'PaketDelete']);
});

Route::prefix('coach')->group(function(){
    route::get('/view',[CoachController::class, 'CoachView']);
    route::post('/add',[CoachController::class, 'CoachAdd']);
    route::put('/update/{id}',[CoachController::class, 'CoachUpdate']);
    route::delete('/delete/{id}',[CoachController::class, 'CoachDelete']);
});

Route::prefix('transaksi')->group(function(){
    route::get('/',[TransaksiController::class, 'TransaksiView']);
    route::get('/edit/{id}',[TransaksiController::class, 'TransaksiEdit']);
    route::post('/update/{id}',[TransaksiController::class, 'TransaksiUpdate']);
    route::get('/delete/{id}',[TransaksiController::class, 'TransaksiDelete']);
    route::get('/invoice/{id}',[TransaksiController::class, 'Invoice']);
});
