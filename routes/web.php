<?php

use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Models\Accessory;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('/', function () {
    return view('main');
})->name('inicio');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('faq', function () {
    return view('faq');
})->name('faq');

Route::get('/productos', [ProductController::class, 'index'])->name('productos');
Route::get('/productos/data', 'App\Http\Controllers\ProductController@getProducts');

Route::get('/producto/{id}', [ProductController::class, 'show'])->name('producto');


Route::get('/accesorios', [AccessoryController::class, 'index'])->name('accesorios');

Route::get('/errors', function () {
    abort('401');
});

//Route::resource('/admin', AdminController::class)->middleware('admin');

Route::resource('/products', ProductController::class)->middleware('admin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
