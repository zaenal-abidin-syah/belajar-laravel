<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post //extends Model
{
    //use HasFactory;
    private static $blog_posts = [
        [
            "title"=>"Judul Post Pertama",
            "slug"=>"judul-post-pertama",
            "author"=>"Zaenal Abidin Syah",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem soluta nemo placeat dolores ab laborum recusandae at temporibus voluptate dolor aspernatur rerum animi, doloribus, aliquid praesentium non. Eligendi vel, ratione nisi libero hic quia modi facere voluptate, sapiente error amet ea facilis non, expedita mollitia. Assumenda cupiditate quaerat fuga modi cumque ipsam tempora rem reiciendis error! Facilis, maxime. Reprehenderit commodi quas, temporibus facilis consectetur debitis explicabo autem saepe voluptatibus inventore sapiente itaque facere laborum sit eius ipsa esse corporis libero."
        ],
        [
            "title"=>"Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author"=>"Rizki Alamsyah",
            "body"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi amet debitis voluptates necessitatibus odio officiis pariatur enim expedita laborum sed. ipsum dolor sit amet consectetur adipisicing elit. Voluptatem soluta nemo placeat dolores ab laborum recusandae at temporibus voluptate dolor aspernatur rerum animi, doloribus, aliquid praesentium non. Eligendi vel, ratione nisi libero hic quia modi facere voluptate, sapiente error amet ea facilis non, expedita mollitia. Assumenda cupiditate quaerat fuga modi cumque ipsam tempora rem reiciendis error! Facilis, maxime. Reprehenderit commodi quas, temporibus facilis consectetur debitis explicabo autem saepe voluptatibus inventore sapiente itaque facere laborum sit eius ipsa esse corporis libero."
        ]
    ];
    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
