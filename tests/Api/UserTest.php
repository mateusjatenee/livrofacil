<?php

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCanRegister()
    {
        $data = [
            'name' => 'Mateus',
            'email' => 'mateus@mguimaraes.co',
            'password' => 'whatever123',
        ];

        $this->post('api/auth/register', $data)->seeJson([
            'name' => 'Mateus',
            'email' => 'mateus@mguimaraes.co',
        ])->assertResponseStatus(200);

    }
}
