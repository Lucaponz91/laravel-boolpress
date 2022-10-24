<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luca',
            'email' => 'lucapo1991@msn.com',
            'password' => Hash::make('Luca1234'),
        ]);
    }
}