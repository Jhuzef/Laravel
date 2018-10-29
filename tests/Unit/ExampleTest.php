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

    public function testUserDelete()
    {
        $user = factory(\App\User::class)->make();
        $this->assertEquals(null, $user->delete()); #Deleting a record returns null

    }

    public function testUserSeed()
    {
        $this->artisan("migrate:refresh");
        $this->artisan("db:seed");
        $this->assertEquals(50, \App\User::count());

    }


    public function testCarInsertion()
    {
        $car = factory(\App\Car::class)->make();
        $this->assertInstanceOf( \App\Car::class, $car);
        $this->assertTrue($car->save());

    }


    public function testCarUpdate()
    {
        $user = factory(\App\Car::class)->make();
        $user->year = 2000;
        $this->assertTrue($user->year == 2000);

    }

}
