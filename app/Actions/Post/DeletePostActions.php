<?php

namespace App\Actions\Post;

use App\Models\Post;

class DeletePostActions
{
    public static function execute(string $idPost)
    {
        $post = Post::find($idPost);
        return $post->delete();
    }
}
