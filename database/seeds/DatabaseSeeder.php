<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(PageSeeder::class);
//         $this->call(ItemTypeSeeder::class);
//         $this->call(TagsSeeder::class);
         $this->call(ItemSeeder::class);
         $this->call(ItemPageSeeder::class);

    }
}
