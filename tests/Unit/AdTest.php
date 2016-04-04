<?php

use App\Ad;
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

        $data = factory(Ad::class)->make(['category_id' => $category->id]);

        $ad = $user->ads()->save($data);
        $this->assertEquals($ad->title, 'Animal Farm');
    }
}
