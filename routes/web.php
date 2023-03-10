<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TicketPackageController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])
        ->name('home');
Route::get('/detail', [DetailController::class, 'index'])
        ->name('detail');
Route::get('/checkout', [CheckoutController::class, 'index'])
        ->name('checkout');

Route::prefix('admin')
        ->group(function(){
            Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

            Route::resource('ticket-package', TicketPackageController::class);
            Route::resource('gallery', GalleryController::class);
            Route::resource('transaction', TransactionController::class);
        });
