<?php

use App\Category;
use App\State;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class AdTest extends TestCase
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
        State::create(['name' => 'Sampa', 'initials' => 'SP']);
        Category::create(['name' => 'HQs']);

        $category = Category::find(1);
        $state = State::find(1);

        $user = factory(User::class)->create();
        $user->info()->create([
            'phone_number' => '(91) 980339811',
            'address' => 'Avenida Marques de Herval',
            'state_id' => $state->id,
        ]);

        // let's try creating the book

        $data = [
            'title' => 'Animal Farm',
            'content' => '<h2>This is an awesome book!</h2>  <br>  This is an awesome book by George Orwell.',
            'is_donation' => false,
            'accepts_trades' => true,
            'price' => 10,
            'category_id' => $category->id,
        ];

        $this->post(route('api.ads.store'), $data)->assertResponseStatus(200)->seeJson([
            'title' => 'Animal Farm',
            'is_donation' => false,
            'accepts_trades' => true,
            'price' => 10,
        ]);

    }
}
