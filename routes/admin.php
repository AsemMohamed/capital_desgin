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


/*Route::prefix('admin')->group(function () {
    Auth::routes();*/

    Route::get('admin','departmentsController@sendAll')->middleware('auth');

        Route::resource('/sliders', 'slidersController');
        Route::resource('/users', 'usersController');
        Route::resource('/departments', 'departmentsController');
        Route::resource('/arrivals', 'arrivalsController');
        Route::resource('/categories', 'categoriesController');
        Route::resource('/designs', 'designsController');
        Route::resource('/chairs', 'chairsController');
        Route::resource('/sofas', 'sofasController');
        Route::resource('/beds', 'bedsController');
        Route::resource('/tables', 'tablesController');
        Route::resource('/dinings', 'diningsController');
        Route::resource('/st_chairs', 'stchairsController');
        Route::resource('/albums', 'albumsController');




/*
});*/