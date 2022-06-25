<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            "nama" => "Admin",
            "email" => "admin@gmail.com",
            "email_verified_at" => null,
            "password" => Hash::make("admin"),
            "level" => "admin"
        ]);
    }
}
