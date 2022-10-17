<?php

namespace App\Repositories\Post;

interface PostsRepositories
{
    public function allPost();

    public function postId (string $idPost);

}
