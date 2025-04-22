<?php

use App\Http\Controllers\MythicalCreatureController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MythicalCreatureController::class, 'index']);
