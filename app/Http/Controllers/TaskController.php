<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Task::paginate(10);
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        //
        Task::create([
            $request->validated()
        ]);
        return response(status: 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
        return $task;
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
        $task->update([
            $request->validated()
        ]);
        return response(status: 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();
        return response(status: 204);
    }
}
