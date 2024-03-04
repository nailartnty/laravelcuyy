<?php

use App\Http\Controllers\FruitController;
use Illuminate\Support\Facades\Route;

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

Route::controller(FruitController::class)->group(function() {
    Route::get('/fruit', 'index')->name('fruit.index');
    // root untk menampilkan input datanya
    Route::get('/fruit/create', 'create')->name('fruit.create');
    Route::post('/fruit/store', 'store')->name('fruit.store');
    Route::get('/fruit/show/{id}', 'show')->name('fruit.show');

    // buat ngedit nihhh
    Route::get('/fruit/edit/{id}', 'edit')->name('fruit.edit');
    Route::put('/fruit/update/{id}', 'update')->name('fruit.update');

    // baut ngehapus nihhh
    Route::get('/fruit/delete/{id}', 'destroy')->name('fruit.destroy');
    // Route::get('/fruit/delete/{id}', 'destroy')->name('fruit.delete');
});
