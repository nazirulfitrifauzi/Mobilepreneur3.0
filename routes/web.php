<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'RedirectController@index');

Auth::routes(['verify' => true]);

Route::get('/test', function () {
    return view('test');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    /** Admin Controller **/
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::post('/semak', 'AdminController@semak')->name('admin.semak');
    Route::post('/update', 'AdminController@update')->name('admin.update');
    Route::delete('/deleteAcc/{id}', 'AdminController@deleteAcc')->name('home.deleteAcc');

    /** Landing Page **/
    Route::get('/home', 'RedirectController@home')->name('home');

    /** Mobilepreneur Controller */
    Route::get('/mobile', 'MobileController@index')->name('mobile');
    Route::post('/mobile-storePeribadi', 'MobileController@storePeribadi')->name('mobile.storePeribadi');
    Route::post('/mobile-storePerniagaan', 'MobileController@storePerniagaan')->name('mobile.storePerniagaan');
    Route::post('/mobile-storePinjaman', 'MobileController@storePinjaman')->name('mobile.storePinjaman');
    Route::delete('/mobile-deleteGambar/{id}', 'MobileController@deleteGambar')->name('mobile.deleteGambar');
    Route::delete('/mobile-deleteKP/{id}', 'MobileController@deleteKP')->name('mobile.deleteKP');
    Route::delete('/mobile-deleteKPP/{id}', 'MobileController@deleteKPP')->name('mobile.deleteKPP');
    Route::delete('/mobile-deleteAsk/{id}', 'MobileController@deleteAsk')->name('mobile.deleteAsk');
    Route::delete('/mobile-deleteBank/{id}', 'MobileController@deleteBank')->name('mobile.deleteBank');
    Route::delete('/mobile-deleteBil/{id}', 'MobileController@deleteBil')->name('mobile.deleteBil');
    Route::delete('/mobile-deleteSupportLetter/{id}', 'MobileController@deleteSupportLetter')->name('mobile.deleteSupportLetter');
    Route::delete('/mobile-deleteMotorcyclePicture/{id}', 'MobileController@deleteMotorcyclePicture')->name('mobile.deleteMotorcyclePicture');
    Route::delete('/mobile-deleteDrivingLicense/{id}', 'MobileController@deleteDrivingLicense')->name('mobile.deleteDrivingLicense');
    Route::delete('/mobile-deleteMotorcycleGrant/{id}', 'MobileController@deleteMotorcycleGrant')->name('mobile.deleteMotorcycleGrant');
    Route::delete('/mobile-deleteRoadtax/{id}', 'MobileController@deleteRoadtax')->name('mobile.deleteRoadtax');
    Route::get('ajaxdata/mobile-getCawangan', 'MobileController@getCawangan')->name('mobile.getCawangan');
    Route::get('ajaxdata/mobile-getAktiviti', 'MobileController@getAktiviti')->name('mobile.getAktiviti');
    Route::get('/mobile-status', 'MobileController@status')->name('mobile.status');
});
