<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\ProjectsController;
use \App\Http\Controllers\Api\TasksController;

Route::get('/', function () {
    return 'api';
});

Route::apiResources([
    'projects' => ProjectsController::class,
]);
Route::apiResources([
    'tasks' => TasksController::class,
]);
Route::post('project', [ProjectsController::class, 'store']);
Route::get('tasks/{project_id}', [TasksController::class, 'show']);
Route::post('tasks/{project_id}', [TasksController::class, 'store']);
Route::put('task/{id}', [TasksController::class, 'update']);
Route::delete('task/{id}', [TasksController::class, 'destroy']);
