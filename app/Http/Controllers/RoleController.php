<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreroleRequest;
use App\Http\Requests\UpdateroleRequest;
use App\Models\role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return role::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreroleRequest $request)
    {
        //
     $role=role::create($request->validated());
     return response("$role->name is created",status:200);   
    }/**
     * Display the specified resource.
     */
    public function show(role $role)
    {
        //
        return $role;
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateroleRequest $request, role $role)
    {
        //
        $role->update($request->validated());
        return response("$role->name is updated",status:200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(role $role)
    {
        //
        $role->delete();
        return response("$role->name is deleted",status:200);
    }
}
