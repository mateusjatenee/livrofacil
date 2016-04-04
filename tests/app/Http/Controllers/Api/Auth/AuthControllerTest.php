<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class AuthControllerTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCanRegister()
    {
        $data = [
            'name' => 'jat@jat.com',
            'email' => 'whatever@a.com',
            'password' => 'mateus01',
        ];

        $this->post('api/auth/register', $data)->seeJson(['name' => 'jat@jat.com'])->assertResponseStatus(200);
    }
}
