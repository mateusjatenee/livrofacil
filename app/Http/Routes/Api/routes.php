<?php

$router->post('auth/register', 'Auth\AuthController@register');

$router->resource('ads', 'AdsController');
