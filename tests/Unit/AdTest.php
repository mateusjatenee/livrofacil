<?php

use App\Category;
use App\State;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class AdTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAdCanBeCreated()
    {
        $user = factory(User::class)->create();
        $state = factory(State::class)->create();
        $category = factory(Category::class)->create();

        $data = [
            'title' => 'Animal Farm',
            'content' => 'An awesome book by George Orwell',
            'is_donation' => false,
            'accepts_trades' => true,
            'price' => 10,
            'category_id' => $category->id,
        ];

        $ad = $user->ads()->create($data);
        $this->assertEquals($ad->title, 'Animal Farm');
    }
}
