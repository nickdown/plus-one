<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $count = Redis::incr('count');

    return view('welcome', ['count' => $count]);
});
