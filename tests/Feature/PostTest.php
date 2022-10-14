<?php

namespace Tests\Feature;

use App\Actions\Post\StorePostActions;
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
        $response = $this->get(route('api.posts.store'));

        $response->assertStatus(200);
    }
}

