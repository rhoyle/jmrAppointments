<?php

// ------------------------------------------
//   Staff / Dashboard PANEL ROUTES
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staff;

Route::middleware('role:2')->prefix('staff')->name('staff.')->group(function (){

    Route::get('dashboard', [staff\DashboardController::class, 'dashboard'])
        ->name('dashboard');

    Route::group(['middleware' => ['is_staff']], function () {


    });

});
