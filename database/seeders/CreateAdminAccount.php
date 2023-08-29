<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();

        User::create([
            'first_name' => 'Tuan',
            'last_name' => 'Le',
            'email' => 'admin@gmail.com',
            'username' => 'tuanle123',
            'password' => Hash::make('tuanle123'),
            'is_active' => true,
            'is_admin' => true
        ]);
    }
}
