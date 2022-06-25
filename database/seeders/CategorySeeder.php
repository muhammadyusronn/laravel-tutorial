<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "name" => "Frontend Programming",
                "slug" => "frontend-programming",
            ],
            [
                "name" => "Backend Programming",
                "slug" => "backend-programming",
            ],
            [
                "name" => "Full Stack Programming",
                "slug" => "full-stack-programming",
            ],
            [
                "name" => "Java Programming",
                "slug" => "java-programming",
            ],
        ]);
    }
}
