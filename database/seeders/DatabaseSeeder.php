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
            'name' => 'p2m',
            'email' => 'p2m@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '0851382348234',
            'role' => 'p2m',
        ]);

        DB::table('users')->insert([
            'name' => 'rehabilitasi',
            'email' => 'rehabilitasi@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '0851382348234',
            'role' => 'rehabilitasi',
        ]);

        DB::table('pertanyaans')->insert([
            'pertanyaan' => 'Bagaimana dengan pelayanan pengaduan masyarakat?',
        ]);

        DB::table('pertanyaans')->insert([
            'pertanyaan' => 'Bagaimana dengan pelayanan permohonan sosialisasi?',
        ]);

        DB::table('pertanyaans')->insert([
            'pertanyaan' => 'Bagaimana dengan pelayanan permohonan rehabilitasi pribadi?',
        ]);

        DB::table('pertanyaans')->insert([
            'pertanyaan' => 'Bagaimana dengan pelayanan permohonan rehabilitasi instansi?',
        ]);

        DB::table('pertanyaans')->insert([
            'pertanyaan' => 'Bagaimana dengan pelayanan SKHPN?',
        ]);
        
        DB::table('pertanyaans')->insert([
            'pertanyaan' => 'Bagaimana dengan pelayanan permohonan tes urine instansi?',
        ]);
            
    }
}
