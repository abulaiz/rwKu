<?php
  Route::prefix('adm')->group(function () {
    Route::get('/', function () {
      return view('admin/auth/login');
    })->name('admin');

    Route::get('dashboard', function () {
      return view('admin/dashboard/index');
    })->name('admin-dashboard')->middleware('auth');

    Route::prefix('service')->group(function () {
      Route::get('submission/cover-letter', 'SementaraController@page')->name('admin-residents')->middleware('auth');
    });
  });
