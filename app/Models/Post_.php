<?php

namespace App\Models;



class Post 
{
    private static $blog_post= [
        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Udin",
            "body" => "Lorem Udin dolor sit amet consectetur adipisicing elit. Officiis, dolorem. Obcaecati expedita voluptatem ratione minima commodi quam rem et, atque ipsa quo eos debitis ea voluptatum, culpa cupiditate delectus ducimus eveniet? Sapiente laboriosam vero non illum. Neque molestias, quis voluptatum unde corrupti dolores quo facilis fuga commodi tempora vel, velit excepturi. Modi maxime, sint quidem provident sequi aspernatur ab nostrum, pariatur autem amet, officia facilis aut itaque perspiciatis quisquam rerum enim. Quia sint non, nihil harum dignissimos quis dolorum atque, minima perferendis itaque soluta officia et amet aspernatur. Eos vel veritatis iusto magnam quisquam animi dolore suscipit dignissimos necessitatibus rem?"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ujang",
            "body" => "Lorem Ujang dolor sit amet consectetur adipisicing elit. Officiis, dolorem. Obcaecati expedita voluptatem ratione minima commodi quam rem et, atque ipsa quo eos debitis ea voluptatum, culpa cupiditate delectus ducimus eveniet? Sapiente laboriosam vero non illum. Neque molestias, quis voluptatum unde corrupti dolores quo facilis fuga commodi tempora vel, velit excepturi. Modi maxime, sint quidem provident sequi aspernatur ab nostrum, pariatur autem amet, officia facilis aut itaque perspiciatis quisquam rerum enim. Quia sint non, nihil harum dignissimos quis dolorum atque, minima perferendis itaque soluta officia et amet aspernatur. Eos vel veritatis iusto magnam quisquam animi dolore suscipit dignissimos necessitatibus rem?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }
    
    public static function find($slug){
        $post = static::all();

        return $post->firstWhere('slug', $slug);
    }
}
