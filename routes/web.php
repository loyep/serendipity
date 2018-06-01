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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

$prefix = config('serendipity.route.prefix', 'admin');

$namespace = 'Admin';

Route::group(['middleware' => ['web', 'auth'], 'prefix' => $prefix, 'namespace' => $namespace,],
    function () {
        Route::get('/', 'AdminController@index')->name('admin');

        Route::get('lock', 'UsersController@lock')->name('admin.lock');
        Route::post('lock', 'UsersController@unlock');
    });
