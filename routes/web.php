<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',                        [UploadController::class, 'index']);

Route::post('/upload-single',          [UploadController::class, 'uploadSingle']);
Route::post('/upload-multiple',        [UploadController::class, 'uploadMultiple']);

Route::post('/upload-single-custom',   [UploadController::class, 'uploadSingleCustom']);
Route::post('/upload-multiple-custom', [UploadController::class, 'uploadMultipleCustom']);

