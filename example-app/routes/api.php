<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\ProjectsController;
use \App\Http\Controllers\Api\TasksController;

Route::get('/', function () {
    return 'g';
});

Route::apiResources([
    'projects' => ProjectsController::class,
]);
Route::apiResources([
    'tasks' => TasksController::class,
]);