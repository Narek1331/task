<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerLocatorController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::prefix('partner_locator')->group(function () {
    Route::get('',[PartnerLocatorController::class,'get']);
    Route::get('filter',[PartnerLocatorController::class,'getFilterValues']);
});
