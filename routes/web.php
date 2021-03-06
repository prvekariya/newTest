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

Route::get('admin',function (){
  return redirect('login');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('save_application','MainController@save')->name('save_application');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('job_list','JobController@index')->name('job_list');
Route::get('view/{id}','JobController@view')->name('view');
Route::get('edit/{id}','JobController@edit')->name('edit');
Route::post('update','JobController@update')->name('update');
Route::get('delete/{id}','JobController@delete')->name('delete');
