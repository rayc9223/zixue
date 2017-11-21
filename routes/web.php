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
//前台登入/註冊路由
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Admin\AdminController@index')->name('admin');

//後台登入/註冊路由, 管理員數量足夠後關閉註冊路由
//管理員路由組, 附加 admin 中間件
Route::group(['prefix'=>'admin', 'middleware'=>'admin'], function(){
    Route::get('login', 'Admin\LoginController@showLoginForm');
    Route::post('login', 'Admin\LoginController@login');
    Route::any('logout', 'Admin\LoginController@logout');
    Route::get('register', 'Admin\RegisterController@showRegistrationForm');
    Route::post('register', 'Admin\RegisterController@register');
});

Route::post('mdtest', 'TestController@test');







