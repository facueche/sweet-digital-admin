<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('login', 'DebianMoor\SweetDigitalAdmin\Controllers\LoginController@showLoginForm')->name('login');
    Route::post('login', 'DebianMoor\SweetDigitalAdmin\Controllers\LoginController@login')->name('login');
    Route::get('logout', 'DebianMoor\SweetDigitalAdmin\Controllers\LoginController@logout')->name('logout');

    Route::get('register', 'DebianMoor\SweetDigitalAdmin\Controllers\RegisterController@showRegisterForm')->name('register');
    Route::post ('register', 'DebianMoor\SweetDigitalAdmin\Controllers\RegisterController@register')->name('register');

    Route::get('dashboard', 'DebianMoor\SweetDigitalAdmin\Controllers\DashboardController@index')->name('dashboard');
});

