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
    Route::get('/institute/show/{id}', 'InstituteController@show')->name('institute.show');
    Route::post('/institute/update/{id}', 'InstituteController@update')->name('institute.update');
    Route::post('/institute/edit/{id}', 'InstituteController@update')->name('institute.edit');
    Route::post('/institute/delete/{id}', 'InstituteController@update')->name('institute.delete');


    Route::get('/creditRating/create', 'creditRatingController@create')->name('creditRating.create');
    Route::post('/creditRating/store', 'creditRatingController@store')->name('creditRating.store');
    Route::get('/creditRating/show', 'creditRatingController@show')->name('creditRating.show');
    Route::post('/creditRating/update/{id}', 'creditRatingController@update')->name('creditRating.update');

    Route::get('/depositeInfo/create', 'depositeInfoController@create')->name('depositeInfo.create');
    Route::post('/depositeInfo/store', 'depositeInfoController@store')->name('depositeInfo.store');
    Route::get('/depositeInfo/show', 'depositeInfoController@show')->name('depositeInfo.show');
    Route::post('/depositeInfo/update/{id}', 'depositeInfoController@update')->name('depositeInfo.update');

    Route::get('/directorInfo/create', 'directorInfoController@create')->name('directorInfo.create');
    Route::post('/directorInfo/store', 'directorInfoController@store')->name('directorInfo.store');
    Route::get('/directorInfo/show', 'directorInfoController@show')->name('directorInfo.show');
    Route::post('/directorInfo/update/{id}', 'directorInfoController@update')->name('directorInfo.update');

    Route::get('/newsFeed/create', 'newsFeedController@create')->name('newsFeed.create');
    Route::post('/newsFeed/store', 'newsFeedController@store')->name('newsFeed.store');
    Route::get('/newsFeed/show', 'newsFeedController@show')->name('newsFeed.show');
    Route::post('/newsFeed/update/{id}', 'newsFeedController@update')->name('newsFeed.update');

    Route::get('/tDRInfo/create', 'tDRInfoController@create')->name('tDRInfo.create');
    Route::post('/tDRInfo/store', 'tDRInfoController@store')->name('tDRInfo.store');
    Route::get('/tDRInfo/show', 'tDRInfoController@show')->name('tDRInfo.show');
    Route::post('/tDRInfo/update/{id}', 'tDRInfoController@update')->name('tDRInfo.update');

    Route::get('/viewAllBanks', 'InstituteController@viewAllBanks')->name('InstituteController.viewAllBanks');
});

