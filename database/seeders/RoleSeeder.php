<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Olubisi olumide', 'email' => 'Olubisiolumidesodiq12@gmail.com', 'password' => bcrypt('Olubisi2013'), 'role' => 'Admin'],
            ['name' => 'Guest', 'email' => 'guest@example.com', 'password' => bcrypt('password'), 'role' => 'Guest'],
        ]);
    }
}
