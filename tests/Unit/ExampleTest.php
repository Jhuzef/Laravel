<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserInsertion()
    {
        $user = factory(\App\User::class)->make();
        $this->assertInstanceOf( \App\User::class, $user);
        $this->assertTrue($user->save());

    }

    public function testUserUpdate()
    {
        $user = factory(\App\User::class)->make();
        $user->name = 'Steve Smith';
        $this->assertTrue($user->name == 'Steve Smith');

    }
}
