<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'nis' => '5200411170',
            'password' => bcrypt('qwerty'),
        ]);
        
        DB::table('users')->insert([
            'role_id' => '2',
            'nis' => '5200411171',
            'password' => bcrypt('qwerty'),
        ]);
        
        DB::table('users')->insert([
            'role_id' => '3',
            'nis' => '5200411172',
            'password' => bcrypt('qwerty'),
        ]);
    }
}
