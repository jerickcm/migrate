<?php
use Illuminate\Support\Facades\Route;
use Jerickcm\Migrate\Controllers\TestController;

Route::get('test', TestController::class);
