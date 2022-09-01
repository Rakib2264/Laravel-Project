<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeCpntroller;



Route::get('/', [HomeCpntroller::class, 'HomeIndex']);

