<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => Str::random(10),
            'description' => Str::random(100),
            'category_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
        ]);
    }
}
