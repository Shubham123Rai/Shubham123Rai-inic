<?php

use Shubham123Rai\Inic\Controllers\InspirationController;
use Illuminate\Support\Facades\Route;

Route::get('add/{a}/{b}', [InspirationController::class, 'add']);
Route::get('sub/{a}/{b}', [InspirationController::class, 'sub']);