<?php
  Route::prefix('adm/resident')->group(function () {
    Route::get('/add', [
      'uses' => 'Resident\ResidentController@page_add'
    ])->middleware('auth');

    Route::get('/list', [
      'uses' => 'Resident\ResidentController@page_list'
    ])->middleware('auth');

    Route::resource('/', 'Resident\ResidentController')->names([
        'store' => 'resident.store'
    ])->middleware('auth');
  });
