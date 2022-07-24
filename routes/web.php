<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GeneralController::class, 'showHome']);

Route::get('/community', [GeneralController::class, 'showStartups']);

Route::post('/contact', '\App\Http\Controllers\ContactController@store');
Route::get('google - analytics - summary', array('as' => 'google - analytics - summary', 'uses' => 'HomeController@getAnalyticsSummary'));
