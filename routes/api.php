<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/set-cache-by-email', [Controller::class, 'setCacheByEmail'])->name('setCacheByEmail');
Route::post('/get-cache-by-email', [Controller::class, 'getCacheByEmail'])->name('getCacheByEmail');
Route::post('/get-cache-by-key', [Controller::class, 'getCacheByKey'])->name('getCacheByKey');
Route::post('/delete-all-cache', [Controller::class, 'deleteAllCache'])->name('deleteAllCache');
Route::get('/getComment', [Controller::class, 'getComment'])->name('getComment');

#upload
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::post('/upload', 'UploadController@upload')->name('upload');
});

Route::group(['namespace' => 'App\Http\Controllers', 'as' => 'videos.'], function () {
    Route::get('/getActiveVideo', 'VideoController@getActiveVideo')->name('getActiveVideo');
    Route::post('/destroy', 'VideoController@destroy')->name('destroy');
});
