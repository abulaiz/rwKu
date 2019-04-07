<?php
  Route::prefix('adm/resident')->group(function () {
    Route::get('/add', [
      'uses' => 'Resident\ResidentController@page_add'
    ]);

    Route::get('/list', [
      'uses' => 'Resident\ResidentController@page_list'
    ]);

    Route::resource('/', 'Resident\ResidentController')->names([
        'store' => 'resident.store'
    ]);
  });
