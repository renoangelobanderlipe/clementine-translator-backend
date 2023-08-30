<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\Languages\LanguagesController;

Route::get('languages', LanguagesController::class);
