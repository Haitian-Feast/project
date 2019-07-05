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
// 前台资源控制器 
Route::resource('/index','Homes\HomeController');
// 前台页面跳转控制器
Route::get('/login','Homes\HomeController@login');
Route::get('/shopcart','Homes\HomeController@shopcart');
Route::get('/commodity','Homes\HomeController@commodity');
Route::get('/buytoday','Homes\HomeController@buytoday');
Route::get('/information','Homes\HomeController@information');
Route::get('/about','Homes\HomeController@about');
Route::get('/register','Homes\HomeController@register');
// 后台资源控制器
Route::resource('/admin','Admin\AdminController');
// 后台页面跳转控制器
Route::get('/adminhuiyuan','Admin\AdminController@huiyuan');