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
            'id'=> '1',
            'item_id' => '1',
            'order' => '1',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '2',
            'item_id' => '2',
            'page_id' =>'1',
            'order' => '2'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '3',
            'item_id' => '3',
            'order' => '3',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '4',
            'item_id' => '4',
            'order' => '4',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '5',
            'item_id' => '5',
            'order' => '5',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '6',
            'item_id' => '6',
            'order' => '6',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '7',
            'item_id' => '7',
            'order' => '7',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '8',
            'item_id' => '8',
            'order' => '8',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '9',
            'item_id' => '9',
            'order' => '9',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '10',
            'item_id' => '10',
            'order' => '10',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '11',
            'item_id' => '11',
            'order' => '11',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '12',
            'item_id' => '12',
            'order' => '12',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '13',
            'item_id' => '13',
            'order' => '13',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '14',
            'item_id' => '14',
            'order' => '14',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '15',
            'item_id' => '15',
            'order' => '15',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '16',
            'item_id' => '16',
            'order' => '16',
            'page_id' =>'1'
        ]);
        DB::table('item_pages')->insert([
            'id'=> '17',
            'item_id' => '17',
            'order' => '17',
            'page_id' =>'1'
        ]);

    }
}
