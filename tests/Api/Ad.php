<?php

use App\Category;
use App\State;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class Ad extends TestCase
{
    use WithoutMiddleware;
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAnAdCanBeCreated()
    {
        $state = factory(State::class)->create();
        $category = factory(Category::class)->create();

        $user = factory(User::class)->create();
        // $user->info()->create([
        //     'phone_number' => '(91) 980339811',
        //     'address' => 'Avenida Marques de Herval',
        //     'state_id' => $state->id,
        // ]);

        // let's try creating the book

        $data = factory(Ad::class)->make(['category_id' => $category->id]);

        $a = $this->actingAs($user)
            ->post(route('api.ads.store'), $data)->seeJson([
            'title' => 'Animal Farm',
            'is_donation' => false,
            'accepts_trades' => true,
            'price' => 10,
        ])->assertResponseStatus(200);

    }

    public function testAdsCanBeListed()
    {

    }
}
