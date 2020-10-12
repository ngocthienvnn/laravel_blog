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
Route::get('/', 'HomeController@index');
Route::get('/admin/categories', 'Admin\CategoryController@categories');
Route::post('admin/category/category','Admin\CategoryController@store');
Route::get('admin/category/post','Admin\PostController@Post');
Route::get('admin/category/getCategory','Admin\CategoryController@getCategory');

