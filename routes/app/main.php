<?php
  Route::get('/', function () {
      return view('home.index');
  });

  Route::get('/service', function () {
      return view('service.index');
  });

  Route::get('/service/covering-letter', function () {
      return view('service.covering-letter.index');
  });

  Route::get('/galery', function () {
      return view('galery.index');
  });

  Route::get('/news', function () {
      return view('news.index');
  });
