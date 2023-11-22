<?php

// ------------------------------------------
//   Admin / Dashboard PANEL ROUTES
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::middleware('role:3')->prefix('admin')->name('admin.')->group(function (){

    Route::get('dashboard', [Admin\UsersController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('users', [Admin\UsersController::class, 'index'])
        ->name('users.index');

    Route::group(['middleware' => ['is_admin']], function () {



    });

});
