<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Supervisor',
            'username'=> 'supervisor',
            'email' => 'supervisor@gmail.com',
            'password' => Hash::make('admin-sv'),
            'is_supervisor' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Pagi',
            'username'=> 'admin-p',
            'email' => 'admin-p@gmail.com',
            'password' => Hash::make('admin-p'),
            'is_supervisor' => '0',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Siang',
            'username'=> 'admin-s',
            'email' => 'admin-s@gmail.com',
            'password' => Hash::make('admin-s'),
            'is_supervisor' => '0',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Malam',
            'username'=> 'admin-m',
            'email' => 'admin-m@gmail.com',
            'password' => Hash::make('admin-m'),
            'is_supervisor' => '0',
        ]);
    }
}
