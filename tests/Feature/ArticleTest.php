<?php

namespace Tests\Feature;

use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get('api/search?q=a')->dump()
            ->assertStatus(200);
    }
}
