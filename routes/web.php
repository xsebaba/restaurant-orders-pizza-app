<?php

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
Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index')->middleware('auth');
Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create');
Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store');
Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show')->middleware('auth');
Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy')->middleware('auth');
Route::put('/pizzas/{id}', 'App\Http\Controllers\PizzaController@update')->middleware('auth');

Route::get('/menu/create', 'App\Http\Controllers\MenuController@create')->middleware('auth');
Route::post('/menu', 'App\Http\Controllers\MenuController@store');
Route::delete('/menu/{id}','App\Http\Controllers\MenuController@destroy')->middleware('auth');
Route::get('/menu/{id}','App\Http\Controllers\MenuController@edit')->middleware('auth');
Route::put('/menu/{id}','App\Http\Controllers\MenuController@update')->middleware('auth');

Route::get('/type/create', 'App\Http\Controllers\MenuTypesController@create')->middleware('auth');
Route::get('/menu', 'App\Http\Controllers\MenuTypesController@index');
Route::post('/type', 'App\Http\Controllers\MenuTypesController@store');
Route::delete('/type/{id}','App\Http\Controllers\MenuTypesController@destroy')->middleware('auth');
Route::get('/type/{id}','App\Http\Controllers\MenuTypesController@edit')->middleware('auth');
Route::put('/type/{id}','App\Http\Controllers\MenuTypesController@update')->middleware('auth');

Auth::routes(
//  ['register'=>false] //'register'=>false if for disable registration. I you want to make registration available just delete this array between ()
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
