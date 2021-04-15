<?php

use App\Http\Controllers\ClientsController;

Route::get('clients', [ClientsController::class, 'index'])
    ->name('clients')
    //->middleware('remember', 'auth');
    ->middleware('auth');

Route::get('clients/create', [ClientsController::class, 'create'])
    ->name('clients.create')
    ->middleware('auth');

Route::post('clients', [ClientsController::class, 'store'])
    ->name('clients.store')
    ->middleware('auth');

Route::get('clients/{client}/edit', [ClientsController::class, 'edit'])
    ->name('clients.edit')
    ->middleware('auth');

Route::put('clients/{client}', [ClientsController::class, 'update'])
    ->name('clients.update')
    ->middleware('auth');

Route::delete('clients/{client}', [ClientsController::class, 'destroy'])
    ->name('clients.destroy')
    ->middleware('auth');

Route::put('clients/{client}/restore', [ClientsController::class, 'restore'])
    ->name('clients.restore')
    ->middleware('auth');
