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
    return redirect()->route('login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/permission-denied','Admin\AdminController@permissionDenied')->name('nopermission');

Route::get('language/{language}','Admin\LanguageController@index')->name('language.index');

//frontend
Route::group(['middleware'=> ['auth']],function(){
    Route::get('courses','Frontend\CourseController@index')->name('frontend_course.index');
    Route::get('detailcourse/{id}','Frontend\CourseController@showCourse')->name('showCourseDetail');
    Route::get('profile/{id}','Frontend\ProfileController@index')->name('frontend_profile.index');
    Route::patch('profile/{id}','Frontend\ProfileController@editAvatarUser')->name('frontend_avataruser.edit');
    Route::get('profile/{id}/edit','Frontend\ProfileController@formEditUser')->name('frontend_formuser.edit');
    Route::post('profile/{id}','Frontend\ProfileController@updateUser')->name('frontend_updateuser');
    Route::get('changepassword','Frontend\ProfileController@changePassForm')->name('frontend_changepass');
    Route::post('changepassword','Frontend\ProfileController@changePassStore')->name('frontend_changepassstore');
    Route::resource('reports','Frontend\ReportController');
});


//admin
Route::group(['prefix' => 'admin','middleware' => ['auth','admin']],function(){
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
    Route::get('profile','Admin\AdminController@profile')->name('admin.profile');
    Route::get('profile/{id}','Admin\AdminController@edit')->name('profile.edit');
    Route::post('profile/{id}','Admin\AdminController@store')->name('profile.store');
    Route::get('chooseforuser','Admin\AdminController@formSubmitCourseOfUser')->name('chooseforuser');
    Route::post('submitcourse','Admin\AdminController@chooseCourseSubjectForUser')->name('submitofuser');

    Route::get('report','Admin\AdminController@reportForm')->name('report.index');
    Route::get('report/{id}','Admin\AdminController@reportShow')->name('report.show');



});

