<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Fati',
            'email' => 'dhrfatima12@gmail.com',
            'password' => Hash::make('dhrfatima12@gmail.com'),
        ]);
    }
}
