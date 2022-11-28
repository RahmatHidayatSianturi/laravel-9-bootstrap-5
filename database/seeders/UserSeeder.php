<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      =>  'admin',
            'id_role'   => 1,
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('admin123'),
        ]);

        DB::table('users')->insert([
            'name'      =>  'user',
            'id_role'   => 2,
            'email'     => 'user@gmail.com',
            'password'  => Hash::make('admin123'),
        ]);
    }
}
