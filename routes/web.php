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

        Route::get('/index', 'slidesController@index');
        Route::get('/designing', 'productsController@design');
        Route::get('/chair', 'productsController@chair');
        Route::get('/sofa', 'productsController@sofa');
        Route::get('/bed', 'productsController@bed');
        Route::get('/dining', 'productsController@dining');
        Route::get('/table', 'productsController@table');
        Route::get('/st_chair', 'productsController@stchairs');
        Route::get('about-us', function () {
        return view('about-us');});
        Route::get('contact-us', function () {
        return view('contact-us');});
        Route::get('/contact-us', 'SendMailController@index');
        Route::post('/contact-us/send', 'SendMailController@send');
        Route::get('album/{product_id}', function () {
        return view('album');});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
