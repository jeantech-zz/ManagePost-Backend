<?php

namespace Tests\Feature;

use App\Actions\Post\StorePostActions;
use App\Actions\Post\UpdatePostActions;
use App\Models\Post;
use App\Repositories\Post\ColeccionsPostsRepositories;
use Tests\TestCase;

class PostTest extends TestCase
{
    public function test_post_index_screen_can_be_rendered(): void
    {
        $response = $this->get(route('api.posts.index'));
        $response->assertStatus(200);
    }

    public function test_post_actions_store(): void
    {
        $data = [
                "creator" => "andrea",
                "title" => "nuevo",
                "description" => "fasfda",
                "photo" => "fad"
        ];

        $create = StorePostActions::execute($data);
        $this->assertSame((string)$create->title,  "nuevo");
    }

    public function test_post_store_screen_can_be_rendered(): void
    {
        $data = [
            "creator" => "andrea",
            "title" => "nuevo",
            "description" => "fasfda",
            "photo" => "fad"
        ];

        $response = $this->post(route('api.posts.store'), $data);

        $response->assertStatus(200);
    }


    public function test_post_actions_update(): void
    {
        $idPost = Post::first();
        $data = [
                "creator" => "Update Andrea",
                "title" => "nuevo",
                "description" => "fasfda",
                "photo" => "fad"
        ];

        $create = UpdatePostActions::execute( $idPost->id, $data);
        $this->assertSame((int)$create,  1);
    }

    public function test_post_update_screen_can_be_rendered(): void
    {
        $idPost = Post::first();
        $data = [
            "creator" => "andrea2",
            "title" => "nuevo",
            "description" => "fasfda",
            "photo" => "fad"
        ];

       $response = $this->putJson('/api/posts/' .$idPost->id, $data);

        $response->assertStatus(200);
    }
}

