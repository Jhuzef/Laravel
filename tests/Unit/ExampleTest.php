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
}
