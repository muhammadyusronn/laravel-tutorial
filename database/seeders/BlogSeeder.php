<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::factory(25)->create();
        // DB::table('blogs')->insert([
        //     [
        //         "title" => "Frontend Engineer For Beginner",
        //         "slug" => "frontend-engineer-for-beginner",
        //         "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ab iusto iste, quas nostrum expedita eveniet molestias placeat enim sit eaque perferendis fuga nisi fugiat dolorum distinctio in natus? Iusto.",
        //         "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda beatae ratione excepturi, at alias qui distinctio, dolores itaque ea quas atque, consectetur sint necessitatibus fugit. Fugit rerum asperiores iste.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, suscipit beatae reprehenderit itaque natus odio. Quam possimus dolores eaque? Recusandae fugit, vero quibusdam repudiandae voluptatem eaque. Sequi similique delectus recusandae!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur impedit ducimus ut earum quis nesciunt inventore iure libero quae perferendis quaerat esse omnis labore perspiciatis, corrupti, blanditiis a unde. Similique quo aliquid doloremque ipsam minima?</p>",
        //         "user_id" => "3",
        //         "category_id" => "1"
        //     ],
        //     [
        //         "title" => "Backend Engineer For Beginner",
        //         "slug" => "backend-engineer-for-beginner",
        //         "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ab iusto iste, quas nostrum expedita eveniet molestias placeat enim sit eaque perferendis fuga nisi fugiat dolorum distinctio in natus? Iusto.",
        //         "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda beatae ratione excepturi, at alias qui distinctio, dolores itaque ea quas atque, consectetur sint necessitatibus fugit. Fugit rerum asperiores iste.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, suscipit beatae reprehenderit itaque natus odio. Quam possimus dolores eaque? Recusandae fugit, vero quibusdam repudiandae voluptatem eaque. Sequi similique delectus recusandae!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur impedit ducimus ut earum quis nesciunt inventore iure libero quae perferendis quaerat esse omnis labore perspiciatis, corrupti, blanditiis a unde. Similique quo aliquid doloremque ipsam minima?</p>",
        //         "user_id" => "1",
        //         "category_id" => "2"
        //     ],
        //     [
        //         "title" => "Fullstack Engineer For Beginner",
        //         "slug" => "fullstack-engineer-for-beginner",
        //         "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ab iusto iste, quas nostrum expedita eveniet molestias placeat enim sit eaque perferendis fuga nisi fugiat dolorum distinctio in natus? Iusto.",
        //         "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda beatae ratione excepturi, at alias qui distinctio, dolores itaque ea quas atque, consectetur sint necessitatibus fugit. Fugit rerum asperiores iste.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, suscipit beatae reprehenderit itaque natus odio. Quam possimus dolores eaque? Recusandae fugit, vero quibusdam repudiandae voluptatem eaque. Sequi similique delectus recusandae!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur impedit ducimus ut earum quis nesciunt inventore iure libero quae perferendis quaerat esse omnis labore perspiciatis, corrupti, blanditiis a unde. Similique quo aliquid doloremque ipsam minima?</p>",
        //         "user_id" => "1",
        //         "category_id" => "3"
        //     ],
        //     [
        //         "title" => "Fullstack Engineer For Professional",
        //         "slug" => "fullstack-engineer-for-professional",
        //         "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ab iusto iste, quas nostrum expedita eveniet molestias placeat enim sit eaque perferendis fuga nisi fugiat dolorum distinctio in natus? Iusto.",
        //         "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda beatae ratione excepturi, at alias qui distinctio, dolores itaque ea quas atque, consectetur sint necessitatibus fugit. Fugit rerum asperiores iste.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, suscipit beatae reprehenderit itaque natus odio. Quam possimus dolores eaque? Recusandae fugit, vero quibusdam repudiandae voluptatem eaque. Sequi similique delectus recusandae!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur impedit ducimus ut earum quis nesciunt inventore iure libero quae perferendis quaerat esse omnis labore perspiciatis, corrupti, blanditiis a unde. Similique quo aliquid doloremque ipsam minima?</p>",
        //         "user_id" => "2",
        //         "category_id" => "3"
        //     ]
        // ]);
    }
}
