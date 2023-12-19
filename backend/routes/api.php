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
Route::get('/cart/{user}/{food}', [CartController::class, 'getAnItem']);
Route::post('/cart', [CartController::class, 'insertToCart']);
Route::put('/cart', [CartController::class, 'updateCartItemQty']);
Route::delete('/cart/{user}/{food}', [CartController::class, 'deleteItemInCart']);
Route::delete('/cart/{id}', [CartController::class, 'deleteAllItemsByUser']);

// booking
Route::post('/booking', [BookTableController::class, 'insertBooking']);
Route::get('/booking', [BookTableController::class, 'getAllBookings']);

// bill status
Route::group(['prefix' => 'billstatus'], function () {
    Route::get('/new', [BillStatusController::class, 'getNewestId']);
    Route::post('/', [BillStatusController::class, 'insertBillStatus']);
    Route::get('/user/{id}', [BillStatusController::class, 'getBillsByUser']);
    Route::get('/bill/{id}', [BillStatusController::class, 'getBillsByBill']);
    Route::get('/', [BillStatusController::class, 'getAll']);
    Route::put('/{id}', [BillStatusController::class, 'updateStatus']);
    Route::put('/paid/{id}', [BillStatusController::class, 'updatePaid']);
    Route::put('/cancel/{id}', [BillStatusController::class, 'cancelStatus']);
});


// bill details
Route::post('/billdetails', [BillDetailsController::class, 'insertBillDetails']);
Route::get('/billdetails/{id}', [BillDetailsController::class, 'getBillDetails']);
