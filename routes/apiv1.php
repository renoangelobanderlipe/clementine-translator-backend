<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\Languages\LanguagesController;
use App\Http\Controllers\V1\Translator\TranslatorController;

Route::get('languages', LanguagesController::class);
Route::post('translator', TranslatorController::class);
