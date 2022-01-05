<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Afif",
        "email" => "cyberhamas@gmail.com",
        "image" => "foto.jpg"
    ]);
});




Route::get('/posts', function () {
    $blogposts = [
        [
            "title" => "Judul Post Pertama",
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

    return view('Posts',[
        "title" => "Post",
        "posts" =>$blogposts
    ]);
});


// halaman single post
// route ini mengatur nama "/" nya
Route::get('hamasafif/{slug}', function($slug) {

    $blogposts = [
        [
            "title" => "Judul Post Pertama",
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

    $new_post = [];
    foreach($blogposts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single post",
        "post" => $new_post
    ]);
});