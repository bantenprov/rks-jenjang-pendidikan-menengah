<?php

Route::group(['prefix' => 'rks-jen-pen-mgh', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\RKSJenPenMgh\Http\Controllers\RKSJenPenMghController@index',
        'create'     => 'Bantenprov\RKSJenPenMgh\Http\Controllers\RKSJenPenMghController@create',
        'store'     => 'Bantenprov\RKSJenPenMgh\Http\Controllers\RKSJenPenMghController@store',
        'show'      => 'Bantenprov\RKSJenPenMgh\Http\Controllers\RKSJenPenMghController@show',
        'update'    => 'Bantenprov\RKSJenPenMgh\Http\Controllers\RKSJenPenMghController@update',
        'destroy'   => 'Bantenprov\RKSJenPenMgh\Http\Controllers\RKSJenPenMghController@destroy',
    ];

    Route::get('/',$controllers->index)->name('rks-jen-pen-mgh.index');
    Route::get('/create',$controllers->create)->name('rks-jen-pen-mgh.create');
    Route::post('/store',$controllers->store)->name('rks-jen-pen-mgh.store');
    Route::get('/{id}',$controllers->show)->name('rks-jen-pen-mgh.show');
    Route::put('/{id}/update',$controllers->update)->name('rks-jen-pen-mgh.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('rks-jen-pen-mgh.destroy');

});

