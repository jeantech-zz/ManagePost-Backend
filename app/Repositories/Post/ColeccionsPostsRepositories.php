<?php

namespace App\Repositories\Post;

use App\Models\Post;

class ColeccionsPostsRepositories implements PostsRepositories
{

    public function allPost ()
    {
        return  Post::all();
    }

    public function postId (string $idPost)
    {
        return  Post::find($idPost);
    }

}