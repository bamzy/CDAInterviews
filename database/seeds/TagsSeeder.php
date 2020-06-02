<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'id'=> '0',
            'tag_key' => '<h1>',
            'description' => 'H1',
        ]);
        DB::table('tags')->insert([
            'id'=> '1',
            'tag_key' => '<h2>',
            'description' => 'H2',
        ]);
        DB::table('tags')->insert([
            'id'=> '2',
            'tag_key' => '<h3>',
            'description' => 'H3',
        ]);
        DB::table('tags')->insert([
            'id'=> '3',
            'tag_key' => '<h4>',
            'description' => 'H4',
        ]);
        DB::table('tags')->insert([
            'id'=> '4',
            'tag_key' => '<b>',
            'description' => 'Bold',
        ]);
        DB::table('tags')->insert([
            'id'=> '5',
            'tag_key' => '<i>',
            'description' => 'Italic',
        ]);
        DB::table('tags')->insert([
            'id'=> '6',
            'tag_key' => '<center>',
            'description' => 'Center',
        ]);

    }
}
