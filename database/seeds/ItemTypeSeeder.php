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
        DB::table('item_types')->insert([
            'id'=> '1',
            'type_name' => 'plain',
        ]);
        DB::table('item_types')->insert([
            'id'=> '2',
            'type_name' => 'link',
        ]);
        DB::table('item_types')->insert([
            'id'=> '3',
            'type_name' => 'image',
        ]);

        DB::table('item_types')->insert([
            'id'=> '4',
            'type_name' => 'html',
        ]);
    }
}
