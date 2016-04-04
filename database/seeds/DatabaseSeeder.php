<?php

use App\Ad;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesSeeder::class);
        $this->call(StatesSeeder::class);

        factory(User::class, 10)->create()->each(function ($user) {
            $fac = factory(Ad::class)->make(['category_id' => 1]);
            $user->ads()->save($fac);
        });
    }
}
