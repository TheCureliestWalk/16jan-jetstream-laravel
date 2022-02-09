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
    $one = 50;
    $two = 73;
    $three = 90;
    return view('index', compact('one', 'two', 'three'));

})->name('index');


Route::get('/admin', function() {
    $one = 50;
    $two = 73;
    $three = 90;
    return view('admin', compact('one', 'two', 'three'));
})->middleware('auth:sanctum', 'verified', 'checkadmin')->name('admin');

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth:sanctum', 'verified')->name('dashboard');

Route::get('/livewire', function () {
    return view('livewire');
});


Route::any('/wallet', [\App\View\Components\CreateNewWallet::class, 'createNewWallet'])->middleware('checkwallet')->name('wallet');
Route::get('/settings', [\App\Http\Controllers\SettingsPage::class, 'render'])->middleware('auth:sanctum')->name('settings');

Route::post('/update/info', [\App\Http\Controllers\SettingsPage::class, 'updateInfo'])->middleware('auth:sanctum')->name('updateSettings');

Route::post('/update/imageprofile', [\App\Http\Controllers\SettingsPage::class, 'updateImage'])->middleware('auth:sanctum')->name('updateImage');

Route::any('/money/add', [\App\View\Components\AddRemoveMoney::class, 'addMoney'])->middleware('auth:sanctum')->name('addMoney');
Route::any('/money/remove', [\App\View\Components\AddRemoveMoney::class, 'removeMoney'])->middleware('auth:sanctum')->name('removeMoney');

Route::get('/debug', function () {
    throw new Exception('My first Sentry error!');
});
