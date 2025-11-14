<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Arthur',
            'email' => 'arthur@gmail.com',
            'password' => Hash::make('123456'),
            'isadmin' => true,
        ]);
    }
}
