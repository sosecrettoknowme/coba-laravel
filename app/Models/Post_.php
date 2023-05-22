<?php

namespace App\Models;




class Postss 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Afdal Rahman Dani",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum quod quisquam ad voluptatibus accusantium! Rerum et dolor doloremque sit voluptates obcaecati corporis, iure maiores quia nulla soluta dignissimos laboriosam, optio adipisci
                       Exercitationem molestias id natus quas consequatur quisquam, ratione nihil provident deserunt corporis fuga quae. Sunt, aspernatur! Architecto, minus iure incidunt cum magni deserunt reiciendis labore, magnam quasi aut aperiam velit sunt
                        nostrum dolores! Voluptates quod accusantium nemo aut repellendus excepturi dolorum minima possimus totam rerum, vitae similique hic libero quasi. Neque, explicabo nobis! Minus quos neque incidunt facere fugiat quo libero, iure impedit magnam numquam id, velit esse ea."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Afdal Rahman",
            "body" => "Eum quod quisquam ad voluptatibus accusantium! Rerum et dolor doloremque sit voluptates obcaecati corporis, iure maiores quia nulla soluta dignissimos laboriosam, optio adipisci. Exercitationem molestias id natus quas consequatur quisquam, ratione nihil provident deserunt corporis fuga quae. Sunt,
                       aspernatur! Architecto, minus iure incidunt cum magni deserunt reiciendis labore, magnam quasi aut aperiam velit sunt nostrum dolores! Voluptates quod accusantium nemo aut repellendus excepturi dolorum minima possimus totam rerum, vitae similique hic libero quasi. Neque, explicabo nobis! Minus quos \
                       neque incidunt facere fugiat quo libero, iure impedit magnam numquam id, velit esse ea Eum quod quisquam ad voluptatibus accusantium! Rerum et dolor doloremque sit voluptates obcaecati corporis, iure maiores quia nulla soluta dignissimos laboriosam, optio adipisci. Exercitationem molestias id natus quas consequatur quisquam,
                       ratione nihil provident deserunt corporis fuga quae. Sunt, aspernatur! Architecto, minus iure incidunt cum magni deserunt reiciendis labore, magnam quasi aut aperiam velit sunt nostrum dolores! Voluptates quod accusantium nemo aut repellendus excepturi dolorum minima possimus totam rerum, vitae similique hic libero quasi. Neque, explicabo nobis! Minus quos neque incidunt facere fugiat quo libero."
        ]
        
        ];
    
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }

    
}
