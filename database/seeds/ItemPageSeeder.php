<?php

use Illuminate\Database\Seeder;

class ItemPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('item_pages')->insert([
            'id'=> '0',
            'item_id' => '18',
            'order' => '0',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '1',
            'item_id' => '1',
            'order' => '1',
            'page_id' =>'1'
        ]);

        DB::table('item_pages')->insert([
            'id'=> '3',
            'item_id' => '3',
            'order' => '3',
            'page_id' =>'1'
        ]);


        DB::table('item_pages')->insert([
            'id'=> '9',
            'item_id' => '9',
            'order' => '9',
            'page_id' =>'1'
        ]);

        DB::table('item_pages')->insert([
            'id'=> '13',
            'item_id' => '13',
            'order' => '13',
            'page_id' =>'1'
        ]);

        DB::table('item_pages')->insert([
            'id'=> '17',
            'item_id' => '17',
            'order' => '17',
            'page_id' =>'1'
        ]);

        DB::table('item_pages')->insert([
            'id'=> '20',
            'item_id' => '20',
            'order' => '20',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '21',
            'item_id' => '21',
            'order' => '21',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '22',
            'item_id' => '22',
            'order' => '22',
            'page_id' =>'1'
        ]);

        DB::table('item_pages')->insert([
            'id'=> '24',
            'item_id' => '24',
            'order' => '24',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '29',
            'item_id' => '29',
            'order' => '1',
            'page_id' =>'2'
        ]);

        DB::table('item_pages')->insert([
            'id'=> '33',
            'item_id' => '33',
            'order' => '5',
            'page_id' =>'2'
        ]);

    }
}
