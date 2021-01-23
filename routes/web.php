<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('admin/login','Admin\AuthController@index')->name('admin.login');
Route::post('admin/login','Admin\AuthController@login');
Auth::routes();
Route::group(['middleware' => 'auth',  'prefix' => ''], function(){
Route::get('admin/home', 'Admin\AuthController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/news','Admin\NewsController@index')->name('admin.news');
Route::get('admin/addNews','Admin\NewsController@add')->name('admin.add_news');
Route::post('storeNews','Admin\NewsController@store')->name('admin.store_news');
Route::get('/admin/editNews/{id}','Admin\NewsController@edit')->name('admin.edit_news');
Route::post('/admin/updateNews/{id}','Admin\NewsController@update');
Route::get('/admin/deleteNews/{id}','Admin\NewsController@delete');



Route::get('admin/category','Admin\CategoryController@index')->name('admin.category');
Route::get('admin/addCategory','Admin\CategoryController@add')->name('admin.add_category');
Route::post('storeCategory','Admin\CategoryController@store')->name('admin.store_category');
Route::get('/admin/editCategory/{id}','Admin\CategoryController@edit')->name('admin.edit_category');
Route::post('/admin/updateCategory/{id}','Admin\CategoryController@update');
Route::get('/admin/deleteCategory/{id}','Admin\CategoryController@delete');

Route::post('/logout','Admin\AuthController@logout')->name('admin.logout');
});