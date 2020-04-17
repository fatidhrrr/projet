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
            'role_id' => 1,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Membre',
            'email' => 'membre@membre.com',
            'password' => Hash::make('membre@membre.com'),
            'role_id' => 2,
        ]);
    }
}
