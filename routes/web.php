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
Route::post('post-login','AuthController@postLogin')->name('post-login');
Route::get('logout','AuthController@logout')->name('logout');

Route::group([ 'namespace' => 'frontend' ], function(){
     Route::get('/', 'FrontendController@index')->name('home');
     Route::get('about-us', 'FrontendController@about_us')->name('about-us');
     Route::get('condo-apartments', 'FrontendController@condo_apartments')->name('condo-apartments');
     Route::get('builders', 'FrontendController@builders')->name('builders');
     Route::get('services', 'FrontendController@services')->name('services');
     Route::get('listing', 'FrontendController@listing')->name('listing');
     Route::get('contact-us', 'FrontendController@contact_us')->name('contact-us');
});

Route::group(['as'=> 'admin.', 'prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['admin']], function(){
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
});
