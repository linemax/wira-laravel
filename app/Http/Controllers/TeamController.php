<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Team::paginate(10);
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        //
        Team::create([
            $request->validated()
        ]);
        return response(status: 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
        return $team;
    }

 

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        //
        $team->update([
            $request->validated()
        ]);
        return response(status: 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
        $team->delete();
        return response(status: 204);
    }
}
