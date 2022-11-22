<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CountEachRequestTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_counts_each_request()
    {
        $this->get('/')
            ->assertDontSeeText(2)
            ->assertSeeText(1)
            ->assertOk();

        $this->get('/')
            ->assertDontSeeText(1)
            ->assertSeeText(2)
            ->assertOk();
    }
}
