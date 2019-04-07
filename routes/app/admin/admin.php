<?php
  Route::prefix('adm')->group(function () {
    Route::get('/', function () {
      return view('admin/auth/login');
    })->name('admin');

    Route::get('dashboard', function () {
      return view('admin/dashboard/index');
    })->name('admin-dashboard');

    Route::prefix('service')->group(function () {
      Route::get('submission/cover-letter', function () {
        return view('admin/service/submission');
      })->name('admin-residents');
    });
  });
