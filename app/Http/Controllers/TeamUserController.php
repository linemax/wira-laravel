<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamUserRequest;
use App\Http\Requests\UpdateTeamUserRequest;
use App\Models\TeamUser;

class TeamUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return TeamUser::paginate(10);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamUserRequest $request)
    {
        //
        TeamUser::create([
            $request->validated()
        ]);
        return response(status: 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamUser $teamUser)
    {
        //
        return $teamUser;
    }

  
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamUserRequest $request, TeamUser $teamUser)
    {
        //
        $teamUser->update([
            $request->validated()
        ]);
        return response(status: 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamUser $teamUser)
    {
        //
        $teamUser->delete();
        return response(status: 204);
    }
}
