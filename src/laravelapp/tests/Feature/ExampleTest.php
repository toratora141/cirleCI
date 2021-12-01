<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->post(route('register'), [
            'name' => 'user',
            'email' => 'email@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
            ->assertStatus(302);
        $this->assertDatabaseHas('users', ['email' => 'email@example.com']);
    }
}
