<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'titre' => 'Coffees & Teas',
            'soustitre' => 'Blended to Perfection',
            'photo' => 'products-01.jpg',
            'description' => "We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.",
        ]);

        DB::table('products')->insert([
            'titre' => 'Bakery & Kitchen',
            'soustitre' => 'Delicious Treats, Good Eats',
            'photo' => 'products-02.jpg',
            'description' => "Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.",
        ]);
    }
}
