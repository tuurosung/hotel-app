<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Rooms\RoomController;
use App\Http\Controllers\Rooms\RoomTypeController;

Route::prefix('rooms')
    ->name('rooms.')
    ->group(function () {

        Route::prefix('manage')
            ->name('manage.')
            ->controller(RoomController::class)
            ->group(function () {

                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{room}', 'edit')->name('edit');
                Route::post('/update/{room}', 'update')->name('update');
                Route::post('/delete/{room}', 'destroy')->name('destroy');
            });


        Route::prefix('room-type')
            ->name('room-type.')
            ->controller(RoomTypeController::class)
            ->group(function () {

                Route::get('/', 'roomTypeIndex')->name('index');
                Route::get('/create', 'roomTypeCreate')->name('create');
                Route::post('/store', 'roomTypeStore')->name('store');
                Route::get('/edit/{roomType}', 'roomTypeEdit')->name('edit');
                Route::post('/update/{roomType}', 'roomTypeUpdate')->name('update');
                Route::post('/delete/{roomType}', 'roomTypeDestroy')->name('destroy');
            });
    });
