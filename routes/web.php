<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * mendaftarkan url atau route baru
 * untuk master-barang
 */

route::group(['prefix' => 'deposit'], function(){
    Route::get('/index', 'Deposit\DepositController@index')->name('deposit');
    Route::get('/create', 'Deposit\DepositController@create')->name('deposit.create');
    Route::post('/store', 'Deposit\DepositController@store')->name('deposit.store');
    Route::get('/tambah-saldo/{id}', 'Deposit\TambahSaldoController@create')->name('tambahsaldo');
    Route::get('/kurang-saldo/{id}', 'Deposit\KurangSaldoController@create')->name('kurangsaldo');
    Route::patch('/update/{id}', 'Deposit\TambahSaldoController@update')->name('saldo.update');
    Route::patch('/kurang/{id}', 'Deposit\KurangSaldoController@update')->name('kurangsaldo.update');
});
