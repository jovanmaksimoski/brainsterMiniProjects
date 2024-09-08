<?php

namespace App\Http\Controllers;
use App\Http\Requests\TeamRequest;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        return view('teams.index', ['teams' => $teams]);
    }

    public function create()
    {
        return view('teams.create');
    }

    public function store(TeamRequest $request)
    {
        $data = $request->validated();

        Team::create([
            'name' => $data['name'],
            'year_of_foundation' => $data['yearOfFoundation']
        ]);

        return redirect()->route('teams.index')->with('success', 'Team created successfully');
    }

    public function edit($id)
    {
        $team = Team::find($id);

        if(!$team){
            return redirect()->route('teams.index')->with('error', "Team doesn't exist");
        }

        return view('teams.edit', ['team' => $team]);
    }

    public function update(TeamRequest $request, $id)
    {
        $data = $request->validated();

        $team = Team::find($id);

        if (!$team) {
            return redirect()->route('teams.index')->with('error', "Team doesn't exist");
        }

        $team->update([
            'name' => $data['name'],
            'year_of_foundation' => $data['yearOfFoundation']
        ]);
    
        return redirect()->route('teams.index')->with('success', 'Team updated successfully');
    }

    public function delete($id)
    {
        $team = Team::find($id);

        if(!$team){
            return redirect()->route('teams.index')->with('error', "Team doesn't exist");
        }

        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team deleted successfully');
    }
}
