<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectsResource;
use App\Models\Projects;
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

    public function store( $id, TasksStoreRequest $request)
    {   
        $project = Projects::findOrFail($id);
        $task = Tasks::create($request->validated());
        $task->project_id =  $project->id;
        $task->save();
      
        return new TasksResource($task);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //получение списка задач по проекту
        return new ProjectsResource(Projects::with('lists')->findOrFail($id));
       
    }
    /**
     * Update the specified resource in storage.
     */
 
    public function update(TasksStoreRequest $request, $id)
    {   
        //обновление
        $task = Tasks::findOrFail($id);
        $task->update($request->validated());

        return new TasksResource($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        //удаление
        $task = Tasks::findOrFail($id);
        $task->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
