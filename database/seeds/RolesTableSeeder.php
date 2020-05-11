<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'owner'
        ]);

        Role::create([
            'name' => 'kasir'
        ]);
    }
}
