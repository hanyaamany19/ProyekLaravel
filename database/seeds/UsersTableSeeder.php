<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $owner = User::create([
            'name' => 'Hani Amany',
            'email' => 'hanyaamany@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $owner->assignRole('owner');

        $kasir = User::create([
            'name' => 'Prianka Wahyu',
            'email' => 'priankawahyu@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $kasir->assignRole('kasir');
    }
}
