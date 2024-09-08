<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 10; $i++) {
            $name = $faker->company;
            $yearOfFoundation = $faker->year;

            Team::create([
                'name' => $name,
                'year_of_foundation' => $yearOfFoundation
            ]);
        }
    }
}
