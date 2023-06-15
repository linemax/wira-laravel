<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepermissionRequest;
use App\Http\Requests\UpdatepermissionRequest;
use App\Models\permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return permission::all();
    }

       /**
     * Store a newly created resource in storage.
     */
    public function store(StorepermissionRequest $request)
    {
        //
        $permission=permission::create($request->validated());
        return response("$permission->name is created",status:200);
    }

    /**
     * Display the specified resource.
     */
    public function show(permission $permission)
    {
        //
        return $permission;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepermissionRequest $request, permission $permission)
    {
        //
        $permission->update($request->validated());
        return response("$permission->name is updated",status:200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(permission $permission)
    {
        //
        $permission->delete();
        return response("$permission->name is deleted",status:200);
    }
}
