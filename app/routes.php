<?php

$route->add('/', 'AuthController@home');
$route->add('/test', 'AuthController@test');

$route->add('/post', 'AuthController@post');

$route->add('/multiple/test', 'AuthController@many');