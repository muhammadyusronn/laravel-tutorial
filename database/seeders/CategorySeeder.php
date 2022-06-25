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
                "name" => "Frontend",
                "slug" => "frontend",
            ],
            [
                "name" => "Backend",
                "slug" => "backend",
            ],
            [
                "name" => "Full Stack",
                "slug" => "full-stack",
            ],
            [
                "name" => "Java",
                "slug" => "java",
            ],
        ]);
    }
}
