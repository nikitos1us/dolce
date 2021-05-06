<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', 'App\Http\Controllers\MyMainController@home');
Route::get('/about','App\Http\Controllers\MyMainController@about');
Route::get('/nomen', 'App\Http\Controllers\MyMainController@nomen');
Route::get('/hto', 'App\Http\Controllers\MyMainController@hto');


Route::get('rev/index', [ReviewController::class, 'index'])->name('review.index');

Route::get('rev/create', [ReviewController::class, 'create'])->name('review.create');
Route::post('rev/store', [ReviewController::class, 'store'])->name('review.store');



//Adminpanel
Route::get('/adminpanel','App\Http\Controllers\AdminController@login');
Route::post('/adminpanel/check','App\Http\Controllers\AdminController@check')->name('adminpanel.check');

Route::group(['middleware'=>['AuthCheck']],function (){


    Route::get('/adminpanel/logout','App\Http\Controllers\AdminController@logout')->name('adminpanel.logout');
    Route::get('/adminpanel/settings','App\Http\Controllers\AdminController@settings')->name('adminpanel.settings');

    Route::get('/adminpanel/lk/{adm}/edit','App\Http\Controllers\AdminController@lkedit' )->name('adminpanel.lkedit');
    Route::post('/adminpanel/lk/{adm}/edit','App\Http\Controllers\AdminController@lkeditsubmit' )->name('adminpanel.lkeditsubmit');


    Route::get('/adminpanel/addassorty','App\Http\Controllers\AdminController@showassorty')->name('adminpanel.assorty');
    Route::get('/adminpanel/asscheck','App\Http\Controllers\AdminController@asscheck')->name('adminpanel.asscheck');

    Route::get('/adminpanel/asschange/{id}/edit', 'App\Http\Controllers\AdminController@assedit')->name('adminpanel.assedit');
    Route::post('/adminpanel/asschange/{id}/edit', 'App\Http\Controllers\AdminController@asseditsubmit')->name('adminpanel.asseditsubmit');
    Route::get('/adminpanel/asschange/{id}/delete', 'App\Http\Controllers\AdminController@assdelete')->name('adminpanel.assdel');

    Route::get('/adminpanel/addrev','App\Http\Controllers\AdminController@showrev')->name('adminpanel.review');
    Route::get('/adminpanel/revcheck','App\Http\Controllers\AdminController@revcheck')->name('adminpanel.revcheck');
    Route::get('/adminpanel/revchange/{id}/delete', 'App\Http\Controllers\AdminController@revdelete')->name('adminpanel.revdel');


});
