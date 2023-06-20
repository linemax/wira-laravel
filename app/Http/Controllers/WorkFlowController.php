<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkFlowRequest;
use App\Http\Requests\UpdateWorkFlowRequest;
use App\Models\WorkFlow;

class WorkFlowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return WorkFlow::paginate(10);
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkFlowRequest $request)
    {
        //
        WorkFlow::create([
            $request->validated()
        ]);
        return response(status: 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkFlow $workFlow)
    {
        //
        return $workFlow;
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkFlowRequest $request, WorkFlow $workFlow)
    {
        //
        $workFlow->update([
            $request->validated()
        ]);
        return response(status: 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkFlow $workFlow)
    {
        //
        $workFlow->delete();
        return response(status: 204);
    }
}
