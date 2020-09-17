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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/permission-denied','Admin\AdminController@permissionDenied')->name('nopermission');

Route::get('language/{language}','Admin\LanguageController@index')->name('language.index');

//admin
Route::group(['prefix' => 'admin','middleware' => ['auth']],function(){
    // Route::get('/',function(){
    //     return view('admin.index');
    // });

    Route::group(['middleware' => ['admin']], function(){
        Route::get('/','Admin\AdminController@index')->name('admin');
        Route::get('logout','Admin\AdminController@logout')->name('admin.logout');
    });

    //user
    Route::resource('users', 'Admin\UserController');

    Route::resource('courses', 'Admin\CourseController');

    Route::resource('subject','Admin\SubjectController');

    Route::get('trainer','Admin\TrainerController@index')->name('trainer.index');
    Route::get('trainer/{id}','Admin\TrainerController@show')->name('trainer.show');
    Route::post('choosecourse','Admin\TrainerController@choose')->name('course.choose');
    Route::get('supercourse','Admin\SupervisorController@index')->name('supervisor.index');
    Route::get('supercourse/{id}','Admin\SupervisorController@show')->name('supervisor.show');
    Route::post('superchoose','Admin\SupervisorController@choose')->name('super.choose');


});

