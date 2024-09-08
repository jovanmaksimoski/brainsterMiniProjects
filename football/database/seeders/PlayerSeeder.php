<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\Player;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 50; $i++) {
            $name = $faker->firstName;
            $surname = $faker->lastName;
            $dateOfBirth = $faker->date('Y-m-d');
            $teamId = DB::table('teams')->inRandomOrder()->first()->id;

            Player::create([
                'name' => $name,
                'surname' => $surname,
                'date_of_birth' => $dateOfBirth,
                'team_id' => $teamId
            ]);
        }
    }
}
