<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'id'=> '1',
            'indexed' => false,
            'meta_name' => 'random meta name',
            'meta_description' => 'random meta description',
            'name' => 'Home',
        ]);
        DB::table('pages')->insert([
            'id'=> '2',
            'indexed' => false,
            'name' => 'Contacts',
        ]);

    }
}
