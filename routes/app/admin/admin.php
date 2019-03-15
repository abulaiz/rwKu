<?php
  Route::get('/adm', function () {
      return view('admin/auth/login');
  })->name('admin');

  Route::get('/adm/dashboard', function () {
      return view('admin/dashboard/index');
  })->name('admin-dashboard');

  Route::get('/adm/residents/add', function () {
      return view('admin/residents/add');
  })->name('admin-residents');
