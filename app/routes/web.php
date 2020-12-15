<?php

use app\core\Route\Route;

Route::get('/home', ['home', 'index']);
Route::post('/test', ['home', 'index']);