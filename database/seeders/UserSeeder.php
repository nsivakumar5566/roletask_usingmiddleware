<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make(123456),
            'email_verified_at' => Carbon::now(),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Leader',
            'email' => 'leader@gmail.com',
            'password' => Hash::make(123456),
            'email_verified_at' => Carbon::now(),
            'role_id' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Developer',
            'email' => 'developer@gmail.com',
            'password' => Hash::make(123456),
            'email_verified_at' => Carbon::now(),
            'role_id' => 3,
        ]);
    }
}
