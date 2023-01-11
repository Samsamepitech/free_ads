<?php

use App\Http\Controllers\InsertAdsController;
use App\Http\Controllers\InstallAdsController;
use App\Http\Controllers\PostAdController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\Category;

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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/profile', 'UsersController@profile')->middleware(['auth'])->name('profile');
Route::get('/edit_profile', 'UsersController@edit_profile')->middleware(['auth']);
Route::post('/profile', 'UsersController@update_profile')->middleware(['auth'])-> name('update_profile');
Route::middleware(['auth', 'isAdmin'])->group(function(){

});



route::group(['middleware' => ['admin']], function () {
    route::post('/admin_crud_users', 'UsersController@admin_adduserbutton')-> name('admin_adduserbutton');
    route::get('/admin_adduser', 'UsersController@page_adduser');
    route::get('/admin_seeuser/{id}', 'UsersController@check_user')->name('check_user');
    route::get('/admin_edituser/{id}', 'UsersController@edit_user')->name('edit_user');
    route::post('/crud_users', 'UsersController@edit_user_validate')-> name('admin_edit_validate');
    route::get('/crud_users/{id}', 'UsersController@delete_user')->name('delete_user');
    route::get('/admin_crud_users', 'UsersController@see_users')->name('crud');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*Route::get('/search', 'SearchController@index')->name('search');*/
Route::resource('user', 'UserController');
Route::resource('ads', 'AdsController');
Route::get('/welcome', 'AdsController@index');
Route::get('sort', 'AdsController@sort');
Route::get('unsort', 'AdsController@unsort');
Route::get('choose', 'AdsController@choose');
Route::get('maxprice', 'AdsController@maxprice');
Route::get('minprice', 'AdsController@minprice');

Route::get('/search', 'AdsController@search')->name('search');
Route::get('/find','AdsController@find')->name('find');
Route::get('/bonjour/{name}', function(){
       
    return 'Bonjour ' . request('name'); 
});


Route::get('/welcome', 'InstallAdsController@index')->name('ads');

Route::get('/details/{id}', 'AdsController@details')->name('details');


Route::get('/ads_create', 'InstallAdsController@create')->name('ads_create'); 

Route::post('/show', 'InstallAdsController@store'); //annonce store et show content for validation
//Route::get('/show/{id}', 'InstallAdsController@saveChangesAd')->name('show'); // modify ads or validate

Route::get('/see_ads', 'InstallAdsController@crud_ads')->name('crud_ads');
Route::get('/see_ads/{id}', 'InstallAdsController@destroy')->name('delete');

Route::get('/update/{id}', 'InstallAdsController@updateAds')->name('update'); 

Route::post('/see_ads', 'InstallAdsController@store');

