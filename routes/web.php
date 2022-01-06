<?php

use App\Core\Routing\Route;

Route::get('/', 'HomeController@index');

Route::post('/contact/add', 'ContactController@add');

Route::get('/contact/edit/{id}', 'ContactController@showEditForm');

Route::post('/contact/edit/{id}', 'ContactController@update');

Route::get('/contact/delete/{id}', 'ContactController@delete');