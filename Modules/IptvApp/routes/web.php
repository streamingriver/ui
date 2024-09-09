<?php

use Illuminate\Support\Facades\Route;
use Modules\IptvApp\Http\Controllers\IptvAppController;

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

Route::group([], function () {
    // Route::resource('iptvapp', IptvAppController::class)->names('iptvapp');
    Route::get('iptvapp', [IptvAppController::class, 'index'])->name('iptvapp.index');
    Route::get('iptvapp/create', [IptvAppController::class, 'create'])->name('iptvapp.create');
    Route::post('iptvapp', [IptvAppController::class, 'store'])->name('iptvapp.store');
    Route::get('iptvapp/{iptvapp}', [IptvAppController::class, 'show'])->name('iptvapp.show');
    Route::get('iptvapp/{iptvapp}/edit', [IptvAppController::class, 'edit'])->name('iptvapp.edit');
    Route::put('iptvapp/{iptvapp}', [IptvAppController::class, 'update'])->name('iptvapp.update');
    Route::delete('iptvapp/{iptvapp}', [IptvAppController::class, 'destroy'])->name('iptvapp.destroy');
});
