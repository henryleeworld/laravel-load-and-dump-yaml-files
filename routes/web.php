<?php

use App\Http\Controllers\YamlController;
use Illuminate\Support\Facades\Route;

Route::get('yaml/parse', [YamlController::class, 'parse']);
