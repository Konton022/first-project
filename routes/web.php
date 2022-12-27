<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProviderController;


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

Route::get('/', [Controller::class, 'render']);
Route::get('/providers', [ProviderController::class, 'index']);
Route::get('/providers/add', [ProviderController::class, 'add']);
Route::get('/offers', [OfferController::class, 'index']);
Route::get('/offers/add', [OfferController::class, 'add']);
Route::get('/offers/update', [OfferController::class, 'update']);
Route::get('/offers/delete', [OfferController::class, 'delete']);



// Route::get('/contacts', [ContactsController::class, 'render']);
// Route::get('/news', [NewsController::class, 'render']);
// Route::get('/vacations', [VacationsController::class, 'render']);
// Route::get('/test', [MyNewController::class, 'render']);
