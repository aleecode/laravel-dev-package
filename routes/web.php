<?php

use Aleecode\Timezones\Controllers\TimezonesController;
use Illuminate\Support\Facades\Route;

Route::get('aleecode', [TimezonesController::class, 'index']);