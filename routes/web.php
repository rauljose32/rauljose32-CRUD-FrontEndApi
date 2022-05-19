<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');

// CLIENTES
// Route::get('/', function () {
//     $api = Http::get('http://localhost:8000/api/clientes');
//     $apiArray = $api->json();
//     //dd($apiArray['data']);
//     return view('cliente.cliente', ['apiArray' => $apiArray]);
// });

//Actions Cliente->
Route::get('clientes', [App\Http\Controllers\ClienteController::class, 'consumir'])->name('consumir'); //EXEMPLO DE API PARA CONSUMIR
Route::get('cliente', [App\Http\Controllers\ClienteController::class, 'create'])->name('create'); //Redirect para Page de Create
Route::post('cliente', [App\Http\Controllers\ClienteController::class, 'store'])->name('store'); //Create
Route::delete('cliente/{id}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('destroy'); //Delete
Route::get('cliente/{id}', [App\Http\Controllers\ClienteController::class, 'show'])->name('show'); //Delete
Route::post('edit/{id}', [App\Http\Controllers\ClienteController::class, 'edit'])->name('edit'); //Edit que leva ao Update
Route::put('update/{id}', [App\Http\Controllers\ClienteController::class, 'update'])->name('update'); //Update
//<-Actions Cliente

//Actions Produto->
Route::get('produtos', [App\Http\Controllers\ProdutoController::class, 'consumir'])->name('consumir');  //EXEMPLO DE API PARA CONSUMIR
Route::get('produto', [App\Http\Controllers\ProdutoController::class, 'create'])->name('create'); //Redirect para Page de Create
Route::post('produto', [App\Http\Controllers\ProdutoController::class, 'store'])->name('store'); //Create
Route::delete('produto/{id}', [App\Http\Controllers\ProdutoController::class, 'destroy'])->name('destroy'); //Delete
Route::get('edit/{id}', [App\Http\Controllers\ProdutoController::class, 'edit'])->name('edit'); //
Route::put('update/{id}', [App\Http\Controllers\ProdutoController::class, 'update'])->name('update'); //Update
//<-Actions Produto



Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);

    Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);

    Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});
