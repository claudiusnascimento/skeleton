<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class UserTest extends TestCase
{

    use RefreshDatabase;

    protected $users;

    public function createUsers($n = 5) {

        $this->users = factory(User::class, $n)->create();
    }

    /** @ptest */
    public function testUsersRouteExists()
    {
        $response = $this->get('/admin/users');

        $response->assertStatus(200);
    }

    /** @test */
    public function it_fetches_all_users()
    {
        $this->createUsers();

        $this->assertEquals($this->users->count(), 5);
    }

    /** @test */
    public function testing_the_ordered_query_scope()
    {

        $this->createUsers();

        $userB = factory(User::class)->create([
            'email' => 'b@a.com',
        ]);

        $userA = factory(User::class)->create([
            'email' => 'a@a.com',
        ]);

        $users = User::ordered('email')->get();

        $this->assertEquals($users->first()->email, 'a@a.com');
    }

    /** @test */
    public function testing_users_count()
    {
        $count = 10;

        $this->createUsers($count);

        $this->assertEquals($this->users->count(), $count);
    }
}
