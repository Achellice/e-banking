<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    /** @test */
    public function test_a_welcome_view_can_be_rendered()
    {
        $view = $this->view('welcome');

        $view->assertSeeText('No. 1 Online Banking System');

    }
    public function test_a_login_view_can_be_rendered()
    {
        $view = $this->view('auth.login');

        $view->assertSeeText('No. 1 Online Banking System');

    }
}
