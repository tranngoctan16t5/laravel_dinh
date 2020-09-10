<?php

Route::group(['prefix' => 'admin','middleware' => ['auth']],function(){
    // Route::get('/',function(){
    //     return view('admin.index');
    // });
    Route::get('/permission-denied','AdminController@permissionDenied')->name('nopermission');
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/','AdminController@index')->name('admin');
    });

});
