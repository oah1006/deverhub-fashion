<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\CatalogController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\auth\LoginController as CustomerLoginController;
use App\Http\Controllers\admin\auth\LoginController as AdminLoginController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home');
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
    Route::name('login.')->controller(CustomerLoginController::class)->group(function() {
        Route::get('/login', 'showLoginForm')->name('index');
        Route::post('login', 'store')->name('store');
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::name('register.')->controller(RegisterController::class)->group(function() {
        Route::get('/register', 'showRegisterForm')->name('index');
        Route::post('/register', 'store')->name('store');
    });
});


Route::prefix('/admin')->name('admin.')->group(function() {
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::prefix('/auth')->name('auth.')->controller(AdminLoginController::class)->group(function() {
        Route::get('/login', 'showLoginForm')->name('login');
        Route::post('/login', 'store')->name('store');
        Route::get('/logout', 'logout')->name('logout');
    });
    
    Route::prefix('/users')->name('users.')->controller(UsersController::class)->group(function() {
        Route::get('/index', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/edit/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
        Route::delete('/delete', 'destroyAll')->name('destroy-all');
        Route::get('/detail/{id}', 'show')->name('show');
    });

    Route::prefix('/catalogs')->name('catalogs.')->controller(CatalogController::class)->group(function() {
        Route::get('/index', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/detail/{id}', 'show')->name('show');
    });

    Route::prefix('/products')->name('products.')->controller(ProductController::class)->group(function() {
        Route::get('/index', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
    });
});


