<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '0851382348234',
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'tu',
            'email' => 'tu@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '0851382348234',
            'role' => 'tu',
        ]);

        DB::table('users')->insert([
            'name' => 'tu',
            'email' => 'tu1@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '0851382348234',
            'role' => 'tu',
        ]);

        DB::table('users')->insert([
            'name' => 'tu',
            'email' => 'tu2@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '0851382348234',
            'role' => 'tu',
        ]);
    }
}
