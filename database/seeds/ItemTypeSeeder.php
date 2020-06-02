<?php

use Illuminate\Database\Seeder;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_type')->insert([
            'id'=> '0',
            'item_type' => 'plain',
        ]);
        DB::table('item_type')->insert([
            'id'=> '1',
            'item_type' => 'link',
        ]);
        DB::table('item_type')->insert([
            'id'=> '2',
            'item_type' => 'image',
        ]);
        DB::table('item_type')->insert([
            'id'=> '3',
            'item_type' => 'meta',
        ]);
    }
}
