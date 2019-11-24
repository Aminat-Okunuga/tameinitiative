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

Route::prefix('/inner')->group(function () {
    Route::get('/', function () {
        return view('pages.home.index');
    });
});

Route::prefix('/events')->group(function () {
    Route::get('/', function () {
        return view('pages.event.events');
    });
    Route::get('/single', function () {
        return view('pages.event.event-item');
    });
});
Route::prefix('/talents')->namespace('Talent')->group(function () {
    Route::get('/', 'TalentController@index');
    Route::get('/single', 'TalentController@singleTalent');
});
Route::prefix('/services')->namespace('Service')->group(function () {
    Route::get('/', 'ServiceController@index');
//    Route::get('/single', 'TalentController@singleTalent');
});
Route::prefix('/galleries')->namespace('Gallery')->group(function () {
    Route::get('/', 'GalleryController@index');
});
Route::prefix('/contacts')->namespace('Contact')->group(function () {
    Route::get('/', 'ContactController@index');
});
Route::prefix('/about-us')->namespace('AboutUs')->group(function () {
    Route::get('/', 'AboutUsController@index');
});


Route::get('/', function () {
    return view('pages.coming-soon');
});


