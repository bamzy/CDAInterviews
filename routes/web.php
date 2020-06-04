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
//    $url = route('profile');
//
//    $redirect = redirect()->route('profile');
    return redirect()->action(
        'PageController@render', ['id' => 1]);
});

Route::get('page/{id}', 'PageController@render')->name('home');;
Route::post('page/update/', 'PageController@store');
Route::post('item/update/', 'ItemController@store');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes(['register' => false]);


Route::get('/home', 'HomeController@index')->name('home');
