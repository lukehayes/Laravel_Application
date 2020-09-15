<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category' => "PHP"],
            ['category' => "Java"],
            ['category' => "Ruby"],
            ['category' => "Python"],
            ['category' => "C++"],
            ['category' => "Javascript"]
        ];

        DB::table('categories')->insert($categories);
    }
}
