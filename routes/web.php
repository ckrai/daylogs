<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UspocController;
use App\Http\Controllers\SpocController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\APIController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('logout', function (){
    // Artisan::call('route:clear');
    // Artisan::call('cache:clear');
    // Artisan::call('config:clear');
    // Artisan::call('config:cache');
    Session::flush();
    Auth::logout();
    return redirect('/login');
});

Route::post('/apidesk', 'APIController@apiCall');

//Route::get('/about', 'APIController@getClients');
Route::get('/about', 'APIController@getClients')->name('about');

Route::get('/', function () { return view('mainpage'); })->name('mainpage');

//Route::get('/about', function () { return view('about'); })->name('about');

Route::get('/teams', function () { return view('teams'); })->name('teams');

Route::get('/services', function () { return view('services'); })->name('services');

Route::get('/sb-account', function () { return view('sb-account'); })->name('sb-account');

Route::get('/rd-account', function () { return view('rd-account'); })->name('rd-account');

Route::get('/fd-account', function () { return view('fd-account'); })->name('fd-account');

Route::get('/services-details', function () { return view('serviceDetail'); })->name('serviceDetail');

Route::get('/project', function () { return view('project'); })->name('project');

Route::get('/project-detail', function () { return view('projectDetails'); })->name('projectDetails');

Route::get('/contact', function () { return view('contact'); })->name('contact');

Route::get('/bc-register', function () { return view('bc_register'); })->name('bc_register');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'superadmin'], function(){
    Route::get('/index', 'SuperAdminController@index')->name('superadmin.sadmin');
    Route::get('/add', 'SuperAdminController@create')->name('superadmin.add');
    Route::post('/add-e', 'SuperAdminController@store')->name('superadmin.save');
    Route::get('/', 'SuperAdminController@index')->name('superadmin.list');
    Route::get('/edit/{id}', 'SuperAdminController@edit')->name('superadmin.edit');
    Route::post('/edit/{id}', 'SuperAdminController@update')->name('superadmin.update');
    Route::get('/view/{id}', 'SuperAdminController@show')->name('superadmin.view');
    Route::delete('/superadmin/{id}', 'SuperAdminController@destroy')->name('superadmin.delete');
    Route::get('/search', 'SuperAdminController@searchGIS')->name('superadmin.simple_search');
    Route::get('/sortbyunit', 'SuperAdminController@sortFE')->name('superadmin.unit');
    Route::get('/sortbyowner', 'SuperAdminController@sortBC')->name('superadmin.owner');
    Route::get('/change-password', 'SuperAdminController@changePass')->name('superadmin.changePassword');
    Route::post('/change-password', 'SuperAdminController@UpdatePass')->name('superadmin.change.password');
});

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/add', 'AdminController@create')->name('admin.add');
    Route::post('/', 'AdminController@store')->name('admin.save');
    Route::get('/all-list', 'AdminController@indexAll')->name('admin.attendance');
    Route::get('/edit/{id}', 'AdminController@edit')->name('admin.edit');
    Route::post('/edit/{id}', 'AdminController@update')->name('admin.update');
    Route::get('/view/{id}', 'AdminController@show')->name('admin.view');
    Route::get('/change-password', 'AdminController@changePass')->name('admin.changePassword');
    Route::post('/change-password', 'AdminController@UpdatePass')->name('admin.change.password');
});

Route::group(['prefix'=>'uspoc'], function(){
    Route::get('/', 'AdminController@index')->name('uspoc.index');
    Route::get('/add', 'AdminController@create')->name('uspoc.add');
    Route::post('/', 'AdminController@store')->name('uspoc.save');
    Route::get('/all-list', 'AdminController@indexAll')->name('uspoc.attendance');
    Route::get('/edit/{id}', 'AdminController@edit')->name('uspoc.edit');
    Route::post('/edit/{id}', 'AdminController@update')->name('uspoc.update');
    Route::get('/view/{id}', 'AdminController@show')->name('uspoc.view');
    Route::get('/change-password', 'AdminController@changePass')->name('uspoc.changePassword');
    Route::post('/change-password', 'AdminController@UpdatePass')->name('uspoc.change.password');
});

Route::group(['prefix'=>'spoc'], function(){
    Route::get('/', 'SpocController@index')->name('spoc.index');
    Route::get('/add', 'SpocController@create')->name('spoc.add');
    Route::post('/', 'SpocController@store')->name('spoc.save');
    Route::get('/change-password', 'SpocController@changePass')->name('spoc.changePassword');
    Route::post('/change-password', 'SpocController@UpdatePass')->name('spoc.change.password');
});

Route::group(['prefix'=>'user'], function(){
    Route::get('/', 'UserController@index')->name('user.index');
    
});