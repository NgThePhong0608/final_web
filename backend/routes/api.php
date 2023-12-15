<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BillDetailsController;
use App\Http\Controllers\Api\BillStatusController;
use App\Http\Controllers\Api\BookTableController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\Api\UserController;
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

// auth
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// user
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{email}', [UserController::class, 'getUserByEmail']);

//food
Route::resource('/foods', FoodController::class);

// cart
Route::get('/cart/{id}', [CartController::class, 'getAllItems']);
Route::get('/cart/{user}/{food}', [CartController::class, 'getAItem']);
Route::post('/cart', [CartController::class, 'insertToCart']);
Route::put('/cart', [CartController::class, 'updateCartItemQty']);
Route::delete('/cart/{user}/{food}', [CartController::class, 'deleteItemInCart']);
Route::delete('/cart/{id}', [CartController::class, 'deleteAllItemsByUser']);

// booking
Route::resource('/booking', BookTableController::class);

// bill status
Route::get('/bill/status/newest', [BillStatusController::class, 'getNewestId']);
Route::post('/bill/status', [BillStatusController::class, 'insertBillStatus']);
Route::get('/bill/status/user/{id}', [BillStatusController::class, 'getBillsByUser']);
Route::get('/bill/status/{id}', [BillStatusController::class, 'getBillsByBill']);
Route::get('/bill/status/all', [BillStatusController::class, 'getAll']);
Route::put('/bill/status/{id}/update', [BillStatusController::class, 'updateStatus']);
Route::put('/bill/status/{id}/update-paid', [BillStatusController::class, 'updatePaid']);
Route::put('/bill/status/{id}/cancel', [BillStatusController::class, 'cancelStatus']);


// bill details
Route::post('/bill/details', [BillDetailsController::class, 'insertBillDetails']);
Route::get('/bill/details/{id}', [BillDetailsController::class, 'getBillDetails']);
