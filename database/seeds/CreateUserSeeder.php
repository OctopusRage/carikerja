<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'type' => '1',
            'password' => Hash::make('password'),
            'email' => 'admin@mail.com',
            'alamat' => 'yogyakarta',
            'biodata' => '',
            'cv' => ''
        ]);
    }
}
