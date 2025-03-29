<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::resource('items', ItemController::class);
//Route::get('/inventory/print', 'InventoryController@print')->name('inventory.print');
