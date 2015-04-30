<?php
	Route::get('home','PageController@home');
	Route::get('product_detail','PageController@productDetail');
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);