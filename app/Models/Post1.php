<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Regita Afriani",
                "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Vitae earum aliquid quas animi, cumque distinctio unde labore dolores sunt quia, dolor mollitia adipisci error.
                        Tempore cupiditate vel fugit blanditiis praesentium sint pariatur, reprehenderit libero saepe quam nihil autem soluta amet sequi adipisci non id unde?
                        Odit hic omnis voluptatibus repellendus fugiat voluptatum aliquid eligendi accusamus laborum molestiae consectetur ullam est tempora quisquam modi eum
                        recusandae aut minima deleniti, qui nisi autem incidunt animi. Quos repudiandae sit veniam obcaecati nihil praesentium!"
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Afriani Sim",
                "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Vitae earum aliquid quas animi, cumque distinctio unde labore dolores sunt quia, dolor mollitia adipisci error.
                        Tempore cupiditate vel fugit blanditiis praesentium sint pariatur, reprehenderit libero saepe quam nihil autem soluta amet sequi adipisci non id unde?
                        Odit hic omnis voluptatibus repellendus fugiat voluptatum aliquid eligendi accusamus laborum molestiae consectetur ullam est tempora quisquam modi eum
                        recusandae aut minima deleniti, qui nisi autem incidunt animi. Quos repudiandae sit veniam obcaecati nihil praesentium!"
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
