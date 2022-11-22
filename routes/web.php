<?php

use App\Models\Statistic;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    /** @var Statistic $countStat */
    $countStat = Statistic::query()->firstWhere('name', 'count');
    $count = $countStat->value + 1;
    $countStat->value = $count;
    $countStat->save();


    return view('welcome', ['count' => $count]);
});
