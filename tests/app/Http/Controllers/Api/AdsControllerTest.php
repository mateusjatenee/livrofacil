<?php

namespace Tests\App\Http\Controllers\Api;

use App\Ad;
use App\Category;
use App\State;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use TestCase;

class AdsControllerTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexStatusCodeShouldBe200()
    {

        $this->visit('/api/books')->seeStatusCode(200);
    }

    public function testIndexShouldHaveAllRecords()
    {
        $category = factory(Category::class)->create();

        $user = factory(User::class)->create();

        $ad = factory(Ad::class)->make(['category_id' => $category->id]);

        $user->ads()->save($ad);

        $this->get('api/books')->seeJson(['title' => 'Animal Farm'])->assertResponseStatus(200);

    }

    public function testAnAdCanBeCreated()
    {
        $category = factory(Category::class)->create();

        $user = factory(User::class)->create();

        $state = factory(State::class)->create();

        $data = [
            'title' => 'Reptilians',
            'content' => 'Amazing book about reptilians',
            'is_donation' => false,
            'accepts_trades' => true,
            'price' => 10,
            'category_id' => $category->id,
            'state_id' => $state->id,
            'city' => 'Whatever',
        ];

        $call = $this->actingAs($user)->post('api/books', $data)->seeJson(['title' => 'Reptilians']);
    }
}
