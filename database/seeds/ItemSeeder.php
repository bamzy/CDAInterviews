<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id'=> '1',
            'body' => 'Ultimate Guide to CDA Structured Interview: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Interview<br\/>',
            'link'=> false,
            'bold' =>true,
            'italic' => false,
        ]);
        DB::table('items')->insert([
            'id'=> '2',
            'body' => 'Overview:',
            'link'=> false,
            'bold' =>true,
            'italic' => false,
        ]);
        DB::table('items')->insert([
            'id'=> '3',
            'body' => 'The purpose of the dental school interview <br\/>
             History and rationale of the CDA interview
             Types of Questions
             The Seven Competencies
             Structure of the CDA interview',
            'link'=> false,
            'bold' =>false,
            'italic' => false,
        ]);

    }
}
