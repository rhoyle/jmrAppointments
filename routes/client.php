<?php

// ------------------------------------------
//   Client / Dashboard PANEL ROUTES
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client;

Route::prefix('client')->name('client.')->group(function (){

    Route::get('dashboard', [Client\DashboardController::class, 'dashboard'])
        ->name('dashboard');

    Route::group(['middleware' => ['is_client']], function () {


    });

});
