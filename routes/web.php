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
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('homePage.homePage');
});
Route::get('/category', function () {
    return view('homePage.category');
});
//
//Route::get('/contact', function () {
//    return view('contact.contact_us');
//});
Route::post('admin/category/category','Admin\CategoryController@store');
Route::get('admin/category/post','Admin\PostController@Post');
Route::get('admin/category/getCategory','Admin\CategoryController@getCategory');

