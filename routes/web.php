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

Auth::routes();

Route::get('/', 'StaticPagesController@rootPage')->name('home');

Route::post('customers/import_csv', 'CustomersController@import_csv')->name('customers.import_csv');
Route::resource('customers', 'CustomersController');
Route::resource('products', 'ProductsController');
Route::resource('profiles', 'ProfilesController', ['only' => ['edit', 'update']]);
Route::resource('estimates', 'EstimatesController');
Route::get('estimates/{id}/report', 'EstimatesController@report')->name('estimates.report');
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::resource('users','UsersController',['only'=>['show','destroy']]); //destroyを追記
Route::get('users','UsersController@delete_confirm')->name('users.delete_confirm'); //警告画面に飛ばしたいため追記

Route::get('downloads',   'DownloadsController@index')->name('downloads.index');
Route::post('downloads2', 'DownloadsController@download2')->name('downloads.download2');
