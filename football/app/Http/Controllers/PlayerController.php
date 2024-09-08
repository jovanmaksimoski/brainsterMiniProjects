<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;
use App\Http\Requests\PlayerRequest;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::get();
        return view('players.index', ['players' => $players]);
    }

    public function create()
    {
        $teams = Team::get();
        return view('players.create', ['teams' => $teams]);
    }

    public function store(PlayerRequest $request)
    {
        $data = $request->validated();

        Player::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'date_of_birth' => $data['dateOfBirth'],
            'team_id' => $data['team']
        ]);

        return redirect()->route('players.index')->with('success', 'Player created successfully');
    }

    public function edit($id)
    {
        $player = Player::find($id);
        $teams = Team::get();

        if(!$player){
            return redirect()->route('players.index')->with('error', "Player doesn't exist");
        }

        return view('players.edit', ['player' => $player, 'teams' => $teams]);
    }

    public function update(PlayerRequest $request, $id)
    {
        $data = $request->validated();

        $player = Player::find($id);

        if (!$player) {
            return redirect()->route('players.index')->with('error', "Player doesn't exist");
        }

        $player->update([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'date_of_birth' => $data['dateOfBirth'],
            'team_id' => $data['team']
        ]);
    
        return redirect()->route('players.index')->with('success', 'Player updated successfully');
    }

    public function delete($id)
    {
        $player = Player::find($id);

        if(!$player){
            return redirect()->route('players.index')->with('error', "Player doesn't exist");
        }

        $player->delete();

        return redirect()->route('players.index')->with('success', 'Player deleted successfully');
    }
}
