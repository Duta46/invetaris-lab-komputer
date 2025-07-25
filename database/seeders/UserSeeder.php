<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'          => 'Super Admin',
                'username'      => 'superadmin',
                'email'         => 'superadmin@gmail.com',
                'password'      => bcrypt('12345678'),
            ],
            [
                'name'          => 'Duta',
                'username'      => 'duta',
                'email'         => 'duta@gmail.com',
                'password'      => bcrypt('password'),
            ],
        ]);
    }
}
