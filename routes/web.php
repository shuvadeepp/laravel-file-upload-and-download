<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

use App\Http\Controllers\Anocontroller;

//---------------------------------------------------------------------------------------------


Route::POST('/download{file}', [Anocontroller::class, 'download']);

Route::GET('/show', [Anocontroller::class, 'show']);

Route::POST('/uploadfile', [Anocontroller::class, 'store']);

Route::GET('/index', [Anocontroller::class, 'filepage']);

Route::GET('/', [Anocontroller::class, 'index']);

