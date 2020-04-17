<?php

use Illuminate\Database\Seeder;

class IndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()     
    {
        DB::table('indices')->insert([
            'photo' => 'intro.jpg',
            'titre' => 'Worth Drinking',
            'text' => 'Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!',
        ]);
    }
}
