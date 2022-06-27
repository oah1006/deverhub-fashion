<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\admin\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catalog-detail', [DetailController::class, 'showDetail'])->name('catalog-detail');
Route::get('/product-detail', [ProductDetailController::class, 'showDetail'])->name('product-detail');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');

Route::prefix('/profile')->name('profile.')->group(function() {
    Route::get('/index', [ProfileController::class, 'showProfile'])->name('index');
    Route::get('/change-password', [ProfileController::class, 'showChangePassword'])->name('change-password');
    Route::get('/delivery-address', [ProfileController::class, 'showDeliveryAddress'])->name('delivery-address');
    Route::get('/edit-address', [ProfileController::class, 'showEditAddress'])->name('edit-address');
    Route::get('/orders', [ProfileController::class, 'showOrders'])->name('orders');
    Route::get('/order-detail', [ProfileController::class, 'showOrderDetail'])->name('order-detail');
});

Route::prefix('/auth')->name('auth.')->group(function() {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'loginAccount'])->name('login-account');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'createAccount'])->name('create-account');
    Route::get('/logout', [AuthController::class, 'logoutAccount'])->name('logout');
});

Route::prefix('/admin')->name('admin.')->group(function() {
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');
    
});

