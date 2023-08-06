<?php

namespace App\Models;

class Post
{
    private static $post_blog = [
        [
            "title"  => 'First Post',
            "slug"   => 'first-post',
            "author" => 'Budi',
            "body"   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque obcaecati dolorum eligendi. Earum quis cum error voluptates, accusamus enim tempora doloribus. Earum debitis quisquam optio nemo iste assumenda fugiat quibusdam quas a, eaque quia tenetur ducimus! Repellat excepturi impedit provident deserunt dicta ex voluptas ea, eius inventore aut quos reprehenderit, earum quae totam nulla fugit expedita minima nihil amet delectus. Cum eius quidem, repellendus ea minus quod sit, aspernatur ratione sequi sunt iste! Reiciendis corrupti sapiente nostrum magnam quo reprehenderit illo amet. Corrupti doloribus vel nihil itaque voluptate ab, natus in maiores delectus dolor perspiciatis doloremque commodi, reiciendis quidem quo.'
        ],
        [
            "title"  => 'Second Post',
            "slug"   => 'second-post',
            "author" => 'Joko',
            "body"   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque obcaecati dolorum eligendi. Earum quis cum error voluptates, accusamus enim tempora doloribus. Earum debitis quisquam optio nemo iste assumenda fugiat quibusdam quas a, eaque quia tenetur ducimus! Repellat excepturi impedit provident deserunt dicta ex voluptas ea, eius inventore aut quos reprehenderit, earum quae totam nulla fugit expedita minima nihil amet delectus. Cum eius quidem, repellendus ea minus quod sit, aspernatur ratione sequi sunt iste! Reiciendis corrupti sapiente nostrum magnam quo reprehenderit illo amet. Corrupti doloribus vel nihil itaque voluptate ab, natus in maiores delectus dolor perspiciatis doloremque commodi, reiciendis quidem quo.'
        ],
    ];

    public static function all()
    {
        return collect(self::$post_blog);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
