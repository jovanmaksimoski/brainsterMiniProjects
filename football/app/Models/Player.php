<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'date_of_birth', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function matches()
    {
        return $this->belongsToMany(FootballMatch::class, 'players_matches')->withPivot('team_id');
    }
}
