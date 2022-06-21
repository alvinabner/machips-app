<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'name' => 'admin',
            'ttl' => now(),
            'alamat' => 'jakarta',
            'phone' => '08123456789',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Semogaberkah'),
        ]);
    }
}
