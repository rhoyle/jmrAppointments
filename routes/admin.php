<?php

// ------------------------------------------
//   Admin / Dashboard PANEL ROUTES
// ------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::prefix('admin')->name('admin.')->group(function (){

    Route::group(['middleware' => ['is_admin']], function () {



    });

});
