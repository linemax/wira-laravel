<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;

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

Route::prefix('teams')->name('teams')->controller(TeamController::class)->group(function () {
    Route::get('', 'index');
    Route::post('', 'store');
    Route::post('{team}', 'update');
    Route::get('{team}', 'show');
    Route::delete('{team}', 'destroy');   
});

Route::prefix('projects')->name('projects')->controller(ProjectController::class)->group(function () {
    Route::get('', 'index');
    Route::post('', 'store');
    Route::post('{project}', 'update');
    Route::get('{project}', 'show');
    Route::delete('{project}', 'destroy');   
});

Route::prefix('teamUsers')->name('teamUsers')->controller(TeamUserController::class)->group(function () {
    Route::get('', 'index');
    Route::post('', 'store');
    Route::post('{teamUser}', 'update');
    Route::get('{teamUser}', 'show');
    Route::delete('{teamUser}', 'destroy');   
});

Route::prefix('tasks')->name('tasks')->controller(TaskController::class)->group(function () {
    Route::get('', 'index');
    Route::post('', 'store');
    Route::post('{task}', 'update');
    Route::get('{task}', 'show');
    Route::delete('{task}', 'destroy');   
});

Route::prefix('workFlows')->name('tasks')->controller(TaskController::class)->group(function () {
    Route::get('', 'index');
    Route::post('', 'store');
    Route::post('{task}', 'update');
    Route::get('{task}', 'show');
    Route::delete('{task}', 'destroy');   
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

//   Route::prefix('dashboard')->name('dashboard')->controller(DashboardController::class)->group(function()
//   {
//   Route::get('','index');
//   Route::post('','store');
//   Route::get('{dashboard}','show');
//   Route::post('{dashboard}','update');
//   Route::delete('{dashboard}','destroy');
//   });
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
