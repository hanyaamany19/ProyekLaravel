<?php

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileTableSeeder extends Seeder
{
    public function run()
    {
       	Profile::create([
            'name' => 'Gramedia',
            'address' => 'Jl. Jakarta no. 12',
            'city'=> 'Pekanbaru',
            'phone' => '10927398'
        ]);
    }
}
