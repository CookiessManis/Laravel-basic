<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "Judul-post-pertama",
            "author" => "bobby",
            "body" => "
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit assumenda, veritatis quas dolorum perspiciatis quidem molestiae natus atque sint harum earum a. Consequuntur corporis facilis quae voluptatibus soluta ad natus?"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Larry",
            "body" => "
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit assumenda, veritatis quas dolorum perspiciatis quidem molestiae natus atque sint harum earum a. Consequuntur corporis facilis quae voluptatibus soluta ad natus?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug',$slug);
    }
}
