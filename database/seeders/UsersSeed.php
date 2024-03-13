<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\User;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'firstName' => 'admin',
            'lastName' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(10),
            'admin' => 1,
        ]);
    }
}
