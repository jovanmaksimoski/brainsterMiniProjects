<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $adminRoleId = Role::where('name', 'admin')->first()->id;
        $userRoleId = Role::where('name', 'user')->first()->id;



        $adminUserEmail = 'jovanmaksimoskii@gmail.com';
        if (!User::where('email', $adminUserEmail)->exists()) {
            User::create([
                'username' => 'jovan',
                'email' => $adminUserEmail,
                'password' => Hash::make('jovan'),
                'role_id' => $adminRoleId,
            ]);
        }

        $regularUserEmail = 'regularuser@example.com';
        if (!User::where('email', $regularUserEmail)->exists()) {
            User::create([
                'username' => 'regularuser',
                'email' => $regularUserEmail,
                'password' => Hash::make('password'),
                'role_id' => $userRoleId,
            ]);
        }
    }
}
