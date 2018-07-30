<?php

Route::middleware(['web', 'auth'])->group(function () {

    Route::get('/', 'HomeController@index')->name('admin.index');

    Route::get('/user', 'UserController@index')->name('admin.user.index');

});
Auth::routes();

