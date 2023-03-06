<?php
use App\Http\Controllers\Application\Web\BrandController;
use Illuminate\Support\Facades\Route;

Route::prefix('brand')->name('brand.')->controller(BrandController::class)->group(function(){
    Route::get('/', 'index')->name('index'); // select
    Route::get('/create', 'create')->name('create'); // select
    Route::post('/create', 'store')->name('store'); //insert 
    Route::get('show/{brnd}', 'show')->name('edit');
    Route::patch('show/{brnd}', 'update')->name('update');
    Route::get('delete/{brnd}', 'destroy')->name('delete'); //sil he
    Route::post('/search', 'search')->name('search'); // select
});