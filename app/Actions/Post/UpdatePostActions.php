<?php

namespace App\Actions\Post;

use App\Models\Post;

class UpdatePostActions
{
    public static function execute(string $idPost, array $data = [])//: Post
    {

        $postRecord =  Post::find($idPost);

        $record = $postRecord->update([
            'creator' => $data['creator'],
            'title' => $data['title'],
            'description' => $data['description'],
            'photo' => $data['photo'],
        ]);

       return  $record;
    }
}
