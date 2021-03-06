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
Route::get('/language/{locale}', function ($locale) {
    App::setLocale($locale);
    \Session::put('locale', $locale);

    return redirect()->back();
	    return App::getLocale();
		return redirect("/");
    //
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact-us', 'GeneralController@contact')->name('contact');
Route::get('/services', 'GeneralController@services')->name('services');
Route::get('/about', 'GeneralController@about')->name('about');
Route::get('/languages', 'GeneralController@language')->name('language');
Route::get('/industry', 'GeneralController@industry')->name('industry');

Route::post('/contact', 'GeneralController@language')->name('saveContact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
