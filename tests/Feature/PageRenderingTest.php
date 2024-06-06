<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageRenderingTest extends TestCase
{
    /**
     * Login page test
     */
    public function test_the_application_returns_a_successful_response_for_login_page(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /**
     * Register page test
     */
    public function test_the_application_returns_a_successful_response_for_register_page(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /**
     * Home page test
     */
    public function test_the_application_returns_a_successful_response_for_home_page(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Colour page test
     */
    public function test_the_application_returns_a_successful_response_for_colour_page(): void
    {
        $response = $this->get('/colour');

        $response->assertStatus(200);
    }

    /**
     * Shape page test
     */
    public function test_the_application_returns_a_successful_response_for_shape_page(): void
    {
        $response = $this->get('/shape');

        $response->assertStatus(200);
    }

    /**
     * Type page test
     */
    public function test_the_application_returns_a_successful_response_for_type_page(): void
    {
        $response = $this->get('/type');

        $response->assertStatus(200);
    }

}



