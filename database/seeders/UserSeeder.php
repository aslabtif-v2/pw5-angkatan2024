<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'npm' => 5520123001,
            'first_name' => 'Tubagus',
            'last_name' => 'Rusli',
            'email' => 'tebe@gmail.com',
            'password' => '123',
        ]);
    }
}
