<?php

use Illuminate\Database\Seeder;

class HSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hsizs')->insert([
            'id'=> '1',
            'start_tag' => '<h1>',
            'end_tag' => '</h1>',
        ]);
        DB::table('hsizs')->insert([
            'id'=> '2',
            'start_tag' => '<h2>',
            'end_tag' => '</h2>',
        ]);
        DB::table('hsizs')->insert([
        'id'=> '3',
        'start_tag' => '<h3>',
        'end_tag' => '</h3>',
        ]);
        DB::table('hsizs')->insert([
        'id'=> '4',
        'start_tag' => '<h4>',
        'end_tag' => '</h4>',
    ]);

    }
}
