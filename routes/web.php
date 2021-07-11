<?php

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show');

Route::post('/cart', 'CartDetailController@store');
Route::delete('/cart', 'CartDetailController@destroy');

Route::post('/order', 'CartController@update');

Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')
->group(function () {
    Route::get('/products', 'ProductController@index'); //listado
    Route::get('/products/create', 'ProductController@create'); //ver el formulario de registro
    Route::post('/products', 'ProductController@store'); //registrar los datos
    Route::get('/products/{id}/edit', 'ProductController@edit'); //ver el formulario de edición
    Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar los datos
    Route::delete('/products/{id}', 'ProductController@destroy'); //form eliminar

    Route::get('/products/{id}/images', 'ImageController@index'); //listado
    Route::post('/products/{id}/images', 'ImageController@store'); //registrar imagenes
    Route::delete('/products/{id}/images', 'ImageController@destroy'); //form eliminar
    Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); //destacar
});
