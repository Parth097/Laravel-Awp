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

Route::get ('carDetails', 'CarWebsiteController@index')->middleware('auth');

Route::get('editDetails', 'CarWebsiteController@myUploads')->middleware('auth');

Route::get('editDetails/{myUploads}/edit/', 'CarWebsiteController@edit');

Route::get('upload', 'CarWebsiteController@upload')->middleware('auth');

Route::get('/carDetails/{likes}/like/', 'LikesController@upVote');

Route::get('/carDetails/{dislikes}/dislike/', 'LikesController@downVote');

Route::post('/editDetails/{editDetailForm}/edit/', 'CarWebsiteController@update');

Route::get('/editDetails/{carWebsiteModel}/delete/', 'CarwebsiteController@destroy');

Route::get ('/carDetails/{viewDetails}/', 'CarWebsiteController@show');

Route::get ('/add/', 'CarWebsiteController@create')->middleware('auth');

Route::post ('/add/', 'CarWebsiteController@store');

Route::get ('/search', 'CarWebsiteController@search')->middleware('auth');

Route::get('contact', 'ContactFormController@create')->middleware('auth');

Route::post('contact', 'ContactFormController@store');

Route::get ('aboutUs', 'CarWebsiteController@aboutPage')->middleware('auth');

Route::get('/redirect', 'SocialAuthGoogleController@redirect');

Route::get('/callback', 'SocialAuthGoogleController@callback');

Route::group(['middleware' => ['auth.user']], function () {
    // login protected routes.
});

Route::group(['middleware' => ['auth.admin']], function () {
    // login protected routes.
});




