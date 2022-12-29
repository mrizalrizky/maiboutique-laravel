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
        $this->call(RoleSeeder::class);
        $this->call(ProductSeeder::class);
        DB::table('users')->insert([
            'roles_id'  => 1,
            'username'  => 'admin',
            'email'     => 'admin@maiboutique.com',
            'password'  => Hash::make('admin123'),
            'phone'     => '012345678',
            'address'   => 'Jl. Permata Hijau'
        ]);
    }
}
