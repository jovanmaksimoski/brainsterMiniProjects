<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\FootballMatch;

class UpdateMatchResults extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'matches:update-results';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update matches played in the last 24 hours with random scores';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $matches = FootballMatch::whereDate('date', '>=', now()->subDay())->get();

        foreach ($matches as $match) {
            $match->update([
                'team1_goals' => rand(0, 5),
                'team2_goals' => rand(0, 5),
            ]);
        }

        $this->info('Match results updated successfully.');
    }
}
