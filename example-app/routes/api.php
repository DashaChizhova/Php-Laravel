<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\ProjectsController;

Route::get('/', function () {
    return 'g';
});

Route::apiResources([
    'projects' => ProjectsController::class,
]);