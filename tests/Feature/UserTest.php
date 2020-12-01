<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Arr;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    private $users;

    protected $seed = true;
    
    protected function setUp(): void {
        parent::setUp();

        $this->users = User::all();
    }

    /**
     * @test
     */
    public function it_should_return_a_list_of_users() {
        $response = $this->json('GET', '/api/users');

        $response->assertStatus(200)->assertJson(['users' => []]);
    }


     /**
     * @test
     */
    public function it_should_return_a_single_user() {
        $user = $this->users->random();
        $response = $this->json('GET', "/api/users/{$user->id}");

        $response->assertStatus(200)->assertJson(['user' => []]);
    }

}
