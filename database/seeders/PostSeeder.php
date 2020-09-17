<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 10; $i++)
        {
            DB::table('posts')->insert([
                'title' => Str::random(),
                'content' => Str::random(50),
                'category_id' => rand(1,6)
            ]);
        }


    }
}
