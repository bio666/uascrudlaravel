<?php

namespace App\Models;



class Post 
{
    private static $blog_post =    [
        [
        "title" => "Judul Post Pertama Hamas Afif",
        "slug" => "judul-post-pertama",
        "author" => "Hamas Afif Aswari",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque blanditiis ut necessitatibus dolores accusamus odio consequatur? Temporibus, sed necessitatibus nobis nisi non natus, libero alias officiis tenetur, error reprehenderit commodi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis voluptatum laudantium officia fugiat vero! Laudantium quasi quam fuga, molestias, eos accusamus eveniet vel est temporibus exercitationem quas fugiat, neque culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis excepturi quo earum accusantium officia? Aliquid atque vero id tempore, quaerat illo. Quam ut dolor in quisquam accusantium ipsum consectetur? Unde?"
    ],

    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Svet Lana",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque blanditiis ut necessitatibus dolores accusamus odio consequatur? Temporibus, sed necessitatibus nobis nisi non natus, libero alias officiis tenetur, error reprehenderit commodi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis voluptatum laudantium officia fugiat vero! Laudantium quasi quam fuga, molestias, eos accusamus eveniet vel est temporibus exercitationem quas fugiat, neque culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis excepturi quo earum accusantium officia? Aliquid atque vero id tempore, quaerat illo. Quam ut dolor in quisquam accusantium ipsum consectetur? Unde?"
    ],
];

    public static function all()
    {
        return collect(self::$blog_post);
    }
    public static function find($slug)
    {
        $posts = static::all();
    //     $post = [];
    //     foreach($posts as $p) {
    //     if($p["slug"] === $slug) {
    //         $post = $p;
    //     }
    // }

    return $posts->firstWhere('slug', $slug);
    }
}