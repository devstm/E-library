<?php

use App\Http\Controllers\bookController;
use Illuminate\Support\Facades\Auth;
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

//create book
Route::get('/create-book', [App\Http\Controllers\bookController::class, 'create'])->name('create-book')->middleware('auth');
Route::post('/create', [App\Http\Controllers\bookController::class, 'store'])->name('create')->middleware('auth');
//update book
Route::get('/update/{id}', 'App\Http\Controllers\AdminController@edit')->middleware('auth');
Route::put('/update/{id}/edit', 'App\Http\Controllers\AdminController@update')->middleware('auth');
//review Books
Route::get('/', [App\Http\Controllers\bookController::class, 'index'])->name('index');
Route::get('book/{id}/download', 'App\Http\Controllers\bookController@show')->name('download');
Route::get('/info', 'App\Http\Controllers\bookController@info')->name('info');
Route::get('/book/{id}/info', 'App\Http\Controllers\bookController@info')->name('info');
//delete
Route::delete('/book/{book}/delete','App\Http\Controllers\AdminController@destroy')->name('destroy')->middleware('auth');
//-----------------------------------------------------
//=====================================================
//create Report
Route::get('/report', 'App\Http\Controllers\ReportController@show');
Route::post('/reportUss', 'App\Http\Controllers\ReportController@store');
//review Reports
Route::get('/reports', 'App\Http\Controllers\ReportController@index')->middleware('auth');
//delete report
Route::delete('/report/{report}/delete','App\Http\Controllers\ReportController@destroy')->name('delete_report')->middleware('auth');

//search
Route::get('/search', 'App\Http\Controllers\bookController@search');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admain routs
Route::get('/books', [App\Http\Controllers\AdminController::class, 'index'])->middleware('auth');
Route::get('/about', [App\Http\Controllers\dashbord::class, 'about']);

