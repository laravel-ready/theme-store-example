<?php

use Illuminate\Support\Facades\Route;


Route::get('store', 'Admin\Store\StoreController@index')->name('admin.store.index');
