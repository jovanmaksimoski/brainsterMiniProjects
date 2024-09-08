<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FootballMatch;
use App\Models\Team;
use App\Http\Requests\MatchRequest;

class MatchController extends Controller
{
    public function index()
    {
        $matches = FootballMatch::get();
        return view('matches.index', ['matches' => $matches]);
    }

    public function create()
    {
        $teams = Team::get();
        return view('matches.create', ['teams' => $teams]);
    }

    public function store(MatchRequest $request)
    {
        $data = $request->validated();

        $match = FootballMatch::create([
            'team1_id' => $data['team1'],
            'team2_id' => $data['team2'],
            'date' => $data['date']
        ]);

        $homeTeamPlayers = Team::find($data['team1'])->players;
        $guestTeamPlayers = Team::find($data['team2'])->players;

        foreach ($homeTeamPlayers as $player) {
            $player->matches()->attach($match->id, ['team_id' => $data['team1']]);
        }
    
        foreach ($guestTeamPlayers as $player) {
            $player->matches()->attach($match->id, ['team_id' => $data['team2']]);
        }

        return redirect()->route('matches.index')->with('success', 'Match created successfully');
    }

    public function edit($id)
    {
        $match = FootballMatch::find($id);
        $teams = Team::get();

        if(!$match){
            return redirect()->route('matches.index')->with('error', "Match doesn't exist");
        }

        return view('matches.edit', ['match' => $match, 'teams' => $teams]);
    }

    public function update(MatchRequest $request, $id)
    {
        $data = $request->validated();

        $match = FootballMatch::find($id);

        if (!$match) {
            return redirect()->route('matches.index')->with('error', "Match doesn't exist");
        }

        $match->update([
            'team1_id' => $data['team1'],
            'team2_id' => $data['team2'],
            'date' => $data['date']
        ]);
    
        return redirect()->route('matches.index')->with('success', 'Match updated successfully');
    }

    public function delete($id)
    {
        $match = FootballMatch::find($id);

        if(!$match){
            return redirect()->route('matches.index')->with('error', "Match doesn't exist");
        }

        $match->delete();

        return redirect()->route('matches.index')->with('success', 'Match deleted successfully');
    }
}
