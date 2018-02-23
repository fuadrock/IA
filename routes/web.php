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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/institute/create', 'InstituteController@create')->name('institute.create');
    Route::post('/institute/store', 'InstituteController@store')->name('institute.store');
    Route::get('/institute/show', 'InstituteController@show')->name('institute.show');

    Route::get('/creditRating/create', 'creditRatingController@create')->name('creditRating.create');
    Route::post('/creditRating/store', 'creditRatingController@store')->name('creditRating.store');
    Route::get('/creditRating/show', 'creditRatingController@show')->name('creditRating.show');

    Route::get('/depositeInfo/create', 'depositeInfoController@create')->name('depositeInfo.create');
    Route::post('/depositeInfo/store', 'depositeInfoController@store')->name('depositeInfo.store');
    Route::get('/depositeInfo/show', 'depositeInfoController@show')->name('depositeInfo.show');

    Route::get('/directorInfo/create', 'directorInfoController@create')->name('directorInfo.create');
    Route::post('/directorInfo/store', 'directorInfoController@store')->name('directorInfo.store');
    Route::get('/directorInfo/show', 'directorInfoController@show')->name('directorInfo.show');

    Route::get('/newsFeed/create', 'newsFeedController@create')->name('newsFeed.create');
    Route::post('/newsFeed/store', 'newsFeedController@store')->name('newsFeed.store');
    Route::get('/newsFeed/show', 'newsFeedController@show')->name('newsFeed.show');

    Route::get('/tDRInfo/create', 'tDRInfoController@create')->name('tDRInfo.create');
    Route::post('/tDRInfo/store', 'tDRInfoController@store')->name('tDRInfo.store');
    Route::get('/tDRInfo/show', 'tDRInfoController@show')->name('tDRInfo.show');
});

