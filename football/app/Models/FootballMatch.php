<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
    use HasFactory;

    protected $table = 'matches';
    protected $fillable = ['team1_id', 'team2_id', 'date', 'team1_goals', 'team2_goals'];
    
    public function players()
    {
        return $this->belongsToMany(Player::class, 'players_matches')->withPivot('team_id');
    }

    public function team1()
    {
        return $this->belongsTo(Team::class);
    }

    public function team2()
    {
        return $this->belongsTo(Team::class);
    }
}
