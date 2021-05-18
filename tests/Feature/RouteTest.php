<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    /** @test */
    public function only_login_user_access_this_route(){
        $response=$this->get('/home')
        ->assertRedirect('/login');
    }

     /** @test */
     public function incorrect_page(){
        $response=$this->get('/ho111e')
        ->assertStatus(404);
    }
    /** @test */
    public function login_route_is_working()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    /** @test */
    public function register_route_is_working()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}
