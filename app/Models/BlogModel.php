<?php

namespace App\Models;


class BlogModel
{
    private static $blogPost = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Admin',
            'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque itaque ut debitis nemo ducimus? Possimus recusandae
                        quidem suscipit quo et esse, doloremque dolore, fugiat facilis quis libero sequi, voluptatem dolor officia deleniti
                        nulla excepturi ea molestias. Aspernatur minus dolores nam harum dignissimos culpa perspiciatis. Dignissimos maxime qui
                        quaerat odio facilis ipsam modi consequuntur deserunt harum possimus hic totam quo tenetur libero unde iste nihil, vitae
                        delectus veritatis. Iusto beatae obcaecati quasi et saepe placeat perspiciatis praesentium consequatur vel voluptatum!
                        Veniam."
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Admin',
            'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque itaque ut debitis nemo ducimus? Possimus recusandae
                        quidem suscipit quo et esse, doloremque dolore, fugiat facilis quis libero sequi, voluptatem dolor officia deleniti
                        nulla excepturi ea molestias. Aspernatur minus dolores nam harum dignissimos culpa perspiciatis. Dignissimos maxime qui
                        quaerat odio facilis ipsam modi consequuntur deserunt harum possimus hic totam quo tenetur libero unde iste nihil, vitae
                        delectus veritatis. Iusto beatae obcaecati quasi et saepe placeat perspiciatis praesentium consequatur vel voluptatum!
                        Veniam."
        ]
    ];

    public static function all()
    {
        return collect(self::$blogPost);
    }

    public static function find($slug = null)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
