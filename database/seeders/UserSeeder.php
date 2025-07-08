<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Alvin Sanudharma',
            'username' => 'alvin-sanudharma',
            'email' => 'alvin@email.com',
            'password' => Hash::make('p@ssw0rd')
        ]);

        User::factory(5)->create();
    }
}
