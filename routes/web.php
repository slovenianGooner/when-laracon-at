<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    $talks = App\Models\Talk::all()->groupBy('day');
//
//    $timezones = Http::get("http://worldtimeapi.org/api/timezone")->json();
//
//    return view('welcome', [
//        'talks' => $talks,
//        'timezones' => $timezones,
//    ]);
//});

Route::get('/', \App\Livewire\Schedule::class);
