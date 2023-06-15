<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

/*=========================================Nzioka Routes======================================*/

Route::prefix('role')->name('role')->controller(RoleController::class)->group(function(){
  Route::get('','index');
  Route::post('','store');
  Route::get('{role}','show');
  Route::post('{role}','update');
  Route::delete('{role}','destroy');
});

Route::prefix('permission')->name('permission')->controller(PermissionController::class)->group(function(){
    Route::get('','index');
    Route::post('','store');
    Route::get('{permission}','show');
    Route::post('{permission}','update');
    Route::delete('{permission}','destroy');
  });
