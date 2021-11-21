<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->firstName = 'vu';
        $user->name = 'duong';
        $user->email = 'duong@gmail.com';
        $user->address = 'Ha Noi';
        $user->phone = '0987654321';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
