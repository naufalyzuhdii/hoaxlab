<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'view_home']);
Route::get('/scan-page', [PageController::class, 'view_scan']);
Route::get('/profile-page', [PageController::class, 'view_profile']);
Route::get('/forum-page', [PageController::class, 'view_forum']);
Route::get('/forum-detail-page', [PageController::class, 'view_forum_detail']);
