<?php

Route::group(['prefix' => 'admin','middleware' => ['auth']],function(){
    // Route::get('/',function(){
    //     return view('admin.index');
    // });

    Route::group(['middleware' => ['admin']], function(){
        Route::get('/','Admin\AdminController@index')->name('admin');
    });

    //user
    Route::resource('users', 'Admin\UserController');

});
