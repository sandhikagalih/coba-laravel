<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla et, adipisci est consectetur odio eligendi, architecto minus natus sit in odit temporibus laboriosam officia aliquam velit ad exercitationem, fuga omnis laudantium. Error fugiat molestiae inventore iusto atque quis quae consectetur voluptatibus sequi ullam quisquam facilis, doloremque quod laborum similique est?"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus dolorum nam sunt. A dolore, doloribus facere officiis beatae fuga eligendi qui dignissimos magni rem quasi dolorum delectus ea maiores expedita?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
