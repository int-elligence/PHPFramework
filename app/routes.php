<?php

Route::get('/', 'HomeController@home');

Route::post('/', 'HomeController@handleForm');