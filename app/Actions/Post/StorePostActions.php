<?php

namespace App\Actions\Post;

use App\Models\Post;

class StorePostActions
{
    public static function execute(array $data)//: Post
    {
        $post = Post::create([
            'creator' => $data['creator'],
            'title' => $data['title'],
            'description' => $data['description'],
            'photo' => $data['photo'],
        ]);

       return  $post;
    }
}

