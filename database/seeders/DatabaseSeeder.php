<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // User::factory()
        //     ->count(50)
        //     ->hasPosts(1)
        //     ->create();

        $this->call([
            // UserSeeder::class,
            PostSeeder::class,
            //CategorySeeder::class,
        ]);
    }
}
