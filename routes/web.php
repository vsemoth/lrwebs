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

Route::get('/about', 'HomeController@getAbout')->name('about');

Route::get('/contact', 'HomeController@getContact')->name('contact');

Route::get('/', 'VideoController@landing')->name('lrwebs');

Route::get('/lrwebs', 'VideoController@landing')->name('test');

Route::get('/video', 'VideoController@getSketch')->name('sketchvid');

Route::get('/landing', function () {
    return view('test');
});

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('video/Sketchpad', ['uses' => 'VideoController@index', 'as' => 'sketch']);
