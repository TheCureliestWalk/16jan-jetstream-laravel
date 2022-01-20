<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
    return view('index');
});


Route::get('/admin', function() {
    return view('admin');
})->middleware('auth:sanctum', 'verified')->name('admin');

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth:sanctum', 'verified')->name('dashboard');

Route::any('/wallet', [\App\View\Components\CreateNewWallet::class, 'createNewWallet'])->middleware('auth:sanctum')->name('wallet');




//Route::middleware('auth:sanctum', 'verified')->group(function (){
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    });
//
//    Route::get('/admin', function () {
//        return view::make('admin');
//    });
//
//    Route::get('/wallet', [\App\View\Components\CreateNewWallet::class, 'createNewWallet']);
//
//});
