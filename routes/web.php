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
//front routes
Route::group(['namespace' => 'Front'], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/episode/{episode}', 'EpisodeController@show');
    Route::get('/episodes', 'EpisodeController@all')->name('all-episodes');

});

//admin routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'role:admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin-index');
    Route::resource('episodes', 'EpisodeController');
    Route::resource('episode-categories', 'EpisodeCategoryController');
    Route::resource('users', 'UserController');
    Route::resource('plans', 'PlanController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
