<?php

namespace Tests\Feature;

<<<<<<< HEAD
// use Illuminate\Foundation\Testing\RefreshDatabase;
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     */
    public function test_the_application_returns_a_successful_response(): void
=======
     *
     * @return void
     */
    public function testBasicTest()
>>>>>>> bc2005be06ac16878f7a8c369e5bc689f4572af7
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
