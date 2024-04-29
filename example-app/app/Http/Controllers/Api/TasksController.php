<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tasks;
use \App\Http\Resources\TasksResource;
use \App\Http\Requests\TasksStoreRequest;
use Illuminate\Http\Response;


class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TasksResource::collection(Tasks::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TasksStoreRequest $request)
    {
        $addTask = Tasks::create($request->validated());

        return new TasksResource($addTask);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      

       
    }
    
        
    

    /**
     * Update the specified resource in storage.
     */
    public function update(TasksStoreRequest $request, Tasks $task)
    {
        $task->update($request->validated());

        return new TasksResource($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasks $task)
    {
        $task->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
