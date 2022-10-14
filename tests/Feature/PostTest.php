<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    public function test_post_index_screen_can_be_rendered(): void
    {
        $response = $this->get(route('posts.index'));

        $response->assertStatus(200);
    }
}
