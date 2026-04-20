<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name'=>'Mahasiswa']);
        Permission::create(['name' => 'Show Buku']);
        User::create([
            'npm' => 5520123005,
            'first_name' => 'Jhon',
            'last_name' => 'Rusli Nih',
            'email' => 'jhon3@gmail.com',
            'password' => bcrypt('password123'),
        ])->assignRole('Mahasiswa');
    }
}
