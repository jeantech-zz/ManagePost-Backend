<?php

namespace App\Actions\Post;

use App\Models\Post;

class StorePostActions
{
    public static function execute(array $data)//: Post
    {
        $user_id=auth()->id();
        if($user_id==null)
        {
            $user_id="default";
        }

        $post = Post::create([
            'creator' => $user_id,
            'title' => $data['title'],
            'description' => $data['description'],
            'photo' => $data['photo'],
        ]);

       return  $post;
    }
}

