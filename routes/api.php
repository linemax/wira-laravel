<?php
use App\Http\Controllers\ProjectController;
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