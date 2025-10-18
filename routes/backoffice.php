<?php
use Illuminate\Support\Facades\Route;


Route::prefix('backoffice')
    ->middleware(['web'])
    ->group(function () {
        Route::get('/', function () {
            return view('layouts.layout_backoffice');
        })->name('backoffice');
    });

