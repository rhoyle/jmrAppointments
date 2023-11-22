<?php

// ------------------------------------------
//   Client / Dashboard PANEL ROUTES
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client;

Route::middleware('role:1')->prefix('client')->name('client.')->group(function (){

    Route::get('dashboard', [Client\DashboardController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('address', [Client\DashboardController::class, 'address'])
        ->name('address');

    Route::group(['middleware' => ['is_client']], function () {


    });

});
