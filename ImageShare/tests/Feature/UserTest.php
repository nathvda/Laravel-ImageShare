<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_user(): void
    {
        $user = User::create([
            'lastname' => 'yop',
            'firstname' => 'firstname',
            'username' => 'username',
            'avatar' => 'idk.png',
            'email' => 'jkldf@mail.com',
            'password' => bcrypt('password')
        ]);

        $this->assertArrayHasKey('lastname',$user);
        $this->assertArrayHasKey('firstname',$user);
        $this->assertArrayHasKey('username',$user);
        $this->assertArrayHasKey('avatar',$user);
        $this->assertArrayHasKey('email',$user);
        $this->assertArrayHasKey('password',$user);
    }
}
